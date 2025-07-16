<?php
class Videos extends WP_Widget {
	function __construct() {
		parent::__construct(
			'akavideos',
			esc_html__( 'Mading : Video Terbaru', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Video Terbaru', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Video Terbaru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$vidpost = ( ! empty( $instance['vidpost'] ) ) ? absint( $instance['vidpost'] ) : 3;
		if ( ! $vidpost ) {
			$vidpost = 3;
		}
		
		$q_args = array( 
			'post_type' => 'video', 
			'numberposts' => $vidpost,
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
		
        <iframe class="vibar" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>

	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['vidpost'] = sanitize_text_field( $new_instance['vidpost'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Video Terbaru';
		$vidpost     = isset( $instance['vidpost'] ) ? esc_attr( $instance['vidpost'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Video Terbaru terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'vidpost' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'vidpost' ); ?>" name="<?php echo $this->get_field_name( 'vidpost' ); ?>" type="number" value="<?php echo $vidpost; ?>" /></p>

    <?php
	}
}