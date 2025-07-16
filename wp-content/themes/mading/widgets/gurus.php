<?php
class Gurus extends WP_Widget {
	function __construct() {
		parent::__construct(
			'gurus',
			esc_html__( 'Mading : Daftar Guru', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Daftar Guru secara acak', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Daftar Guru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$gtkpost = ( ! empty( $instance['gtkpost'] ) ) ? absint( $instance['gtkpost'] ) : 3;
		if ( ! $gtkpost ) {
			$gtkpost = 3;
		}
		
		$q_args = array( 
			'post_type' => 'gtk', 
			'numberposts' => $gtkpost,
			'orderby' => 'rand',
			); 
			
		global $post;
		$rpthumb_posts = get_posts($q_args);
		
		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
		
		<script>
            jQuery(document).ready(function($) {
              var owl = $('.<?php echo $args['widget_id']; ?>');
              owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                'initialize.owl.carousel initialize.owl.carousel ' +
                'resize.owl.carousel resized.owl.carousel ' +
                'refresh.owl.carousel refreshed.owl.carousel ' +
                'update.owl.carousel updated.owl.carousel ' +
                'drag.owl.carousel dragged.owl.carousel ' +
                'translate.owl.carousel translated.owl.carousel ' +
                'to.owl.carousel changed.owl.carousel',
                function(e) {
                  $('.' + e.type)
                    .removeClass('secondary')
                    .addClass('success');
                  window.setTimeout(function() {
                    $('.' + e.type)
                      .removeClass('success')
                      .addClass('secondary');
                  }, 1500);
                });
              owl.owlCarousel({
                loop: true,
                nav: false,
				dots: true,
                lazyLoad: true,
				autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                margin: 15,
                video: true,
                responsive:{
                    0:{ 
					    items:1
                    },
                    600:{
                        items:2
                    },
                    800:{
                        items:2
                    },
                    1024:{
                        items:1
                    }
                }
              });
            });
          </script>
		
		<?php
		echo '<div class="goout"><div class="'.$args['widget_id'].' owl-carousel owl-theme">';
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		?>
		<div class="item">
			<div class="post">
	        	<?php if (has_post_thumbnail()); {
			    	the_post_thumbnail('plite');
		     	} ?>
			    
				<div class="bfgtk"><strong><?php the_title(); ?></strong><br/><br/>
				<p class="pgtk">NIK <span><?php echo get_post_meta($post->ID, '_nik', true); ?></span></p>
				<p class="pgtk">NIP <span><?php echo get_post_meta($post->ID, '_nip', true); ?></span></p>
				<p class="pgtk">STAT <span><?php echo get_post_meta($post->ID, '_stat', true); ?></span></p>
				<p class="pgtk">GTK <span><?php echo get_post_meta($post->ID, '_jen', true); ?></span></p>
				</div>
			</div>
        </div>  

     	<?php	endforeach;
		echo '</div>
		    </div>';
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['gtkpost'] = sanitize_text_field( $new_instance['gtkpost'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Daftar Guru';
		$gtkpost     = isset( $instance['gtkpost'] ) ? esc_attr( $instance['gtkpost'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Daftar Guru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'gtkpost' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'gtkpost' ); ?>" name="<?php echo $this->get_field_name( 'gtkpost' ); ?>" type="number" value="<?php echo $gtkpost; ?>" /></p>

    <?php
	}
}