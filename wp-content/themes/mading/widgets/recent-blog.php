<?php
class RecentBlog extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentblog',
			esc_html__( 'Mading : Blog Guru', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Blog Guru', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Blog Guru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$blog_gu = ( ! empty( $instance['blog_gu'] ) ) ? absint( $instance['blog_gu'] ) : 3;
		if ( ! $blog_gu ) {
			$blog_gu = 3;
		}
		
		$q_args = array( 
			'post_type' => 'blog', 
			'numberposts' => $blog_gu,
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
			<span class="rpthumb-date"<?php echo $offset; ?>>Oleh : <?php the_author(); ?></span>
		</a>
        </div>
	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['blog_gu'] = sanitize_text_field( $new_instance['blog_gu'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Blog Guru';
		$blog_gu     = isset( $instance['blog_gu'] ) ? esc_attr( $instance['blog_gu'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Blog Guru terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'blog_gu' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'blog_gu' ); ?>" name="<?php echo $this->get_field_name( 'blog_gu' ); ?>" type="number" value="<?php echo $blog_gu; ?>" /></p>

    <?php
	}
}