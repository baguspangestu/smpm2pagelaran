<?php
class PrestasiWid extends WP_Widget {
	function __construct() {
		parent::__construct(
			'prestasiwd',
			esc_html__( 'Mading : Prestasi', 'akademi' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Prestasi', 'akademi' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Prestasi' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$prestasi_wd = ( ! empty( $instance['prestasi_wd'] ) ) ? absint( $instance['prestasi_wd'] ) : 3;
		if ( ! $prestasi_wd ) {
			$prestasi_wd = 3;
		}
		
		$q_args = array( 
			'post_type' => 'prestasi', 
			'numberposts' => $prestasi_wd,
			); 
			
		global $post;
		$rpthumb_posts = get_posts($q_args);
		
		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		?>
        <div class="widmading clear">
		<a href="<?php the_permalink(); ?>" class="rpthumb clear">
			<?php if (has_post_thumbnail() && !get_option('rpthumb_thumb')) {
				the_post_thumbnail('small');
				$offset = ' style="padding-left: 65px;"';
			}
			else $offset = '';
			?>
			<span class="rpthumb-date"<?php echo $offset; ?>>Nama : <?php echo get_post_meta($post->ID, '_peraih', true); ?></span>
			<span class="rpthumb-title"<?php echo $offset; ?>><?php the_title(); ?></span>
		</a>
        </div>
	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['prestasi_wd'] = sanitize_text_field( $new_instance['prestasi_wd'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Prestasi';
		$prestasi_wd     = isset( $instance['prestasi_wd'] ) ? esc_attr( $instance['prestasi_wd'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Prestasi terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'prestasi_wd' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'prestasi_wd' ); ?>" name="<?php echo $this->get_field_name( 'prestasi_wd' ); ?>" type="number" value="<?php echo $prestasi_wd; ?>" /></p>

    <?php
	}
}