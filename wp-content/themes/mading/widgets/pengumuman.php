<?php
class RecentPengumuman extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentpengumuman',
			esc_html__( 'Mading : Pengumuman', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Pengumuman', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Pengumuman' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$pengwd = ( ! empty( $instance['pengwd'] ) ) ? absint( $instance['pengwd'] ) : 3;
		if ( ! $pengwd ) {
			$pengwd = 3;
		}
		
		
        $today = strtotime(date('d-m-Y'));
		$q_args = array( 
			'post_type' => 'pengumuman', 
			'numberposts' => $pengwd,
			); 
			
		global $post;
		$rpthumb_posts = get_posts($q_args);
		
		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
			$tanggalan = get_post_meta($post->ID, '_tevent', true);
		$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
		$jam = get_post_meta($post->ID, '_jam', true);
		
		?>

        <div class="widmading clear">
		    <div class="post-meta"><?php printf(__('Diterbitkan : <span class="post-date">%s</span>', 'mading'),
						get_the_time('l, j M Y')
				); ?></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-meta"><?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 13); ?></div>
		</div>   

	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['pengwd'] = sanitize_text_field( $new_instance['pengwd'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Pengumuman';
		$pengwd     = isset( $instance['pengwd'] ) ? esc_attr( $instance['pengwd'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Pengumuman terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'pengwd' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'pengwd' ); ?>" name="<?php echo $this->get_field_name( 'pengwd' ); ?>" type="number" value="<?php echo $pengwd; ?>" /></p>

    <?php
	}
}