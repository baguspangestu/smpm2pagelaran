<?php
class Recentposts_thumbnail extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentposts_thumbnail',
			esc_html__( 'Mading : Berita Terbaru', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Berita Terbaru', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Berita Terbaru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$rpthumb_qty = ( ! empty( $instance['rpthumb_qty'] ) ) ? absint( $instance['rpthumb_qty'] ) : 3;
		if ( ! $rpthumb_qty ) {
			$rpthumb_qty = 3;
		}
		
		$q_args = array( 
			'post_type' => 'post', 
			'numberposts' => $rpthumb_qty,
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
			<span class="rpthumb-title"<?php echo $offset; ?>><?php the_title(); ?></span>
			<span class="rpthumb-date"<?php echo $offset; ?>><?php the_time('M j, Y'); ?></span>
		</a>
        </div>
	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['rpthumb_qty'] = sanitize_text_field( $new_instance['rpthumb_qty'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Berita Terbaru';
		$rpthumb_qty     = isset( $instance['rpthumb_qty'] ) ? esc_attr( $instance['rpthumb_qty'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Berita Terbaru terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'rpthumb_qty' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'rpthumb_qty' ); ?>" name="<?php echo $this->get_field_name( 'rpthumb_qty' ); ?>" type="number" value="<?php echo $rpthumb_qty; ?>" /></p>

    <?php
	}
}