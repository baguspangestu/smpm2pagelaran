<?php
class RecentAgenda extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentagenda',
			esc_html__( 'Mading : Agenda', 'akademi' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Agenda', 'akademi' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Agenda' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$agendawd = ( ! empty( $instance['agendawd'] ) ) ? absint( $instance['agendawd'] ) : 3;
		if ( ! $agendawd ) {
			$agendawd = 3;
		}
		
		
        $today = strtotime(date('d-m-Y'));
		$q_args = array( 
			'post_type' => 'agenda', 
			'numberposts' => $agendawd,
			'meta_key' => '_minus',
			'meta_query' => array(
				array(
				'key' => '_minus',
				'value' => $today,
				'compare' => '>='
				)
			),
			'orderby' => 'meta_value',
			'order' => 'ASC'
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
			<div class="agloop clear">
				<div class="age-info">
			    	<span class="agedate"><?php echo date_i18n('j', strtotime($tanggalan)); ?></span>
					<span class="agemon"><?php echo date_i18n('F', strtotime($tanggalan)); ?></span>
				</div>
				<div class="atime">
					<div class="wakt">waktu : <?php echo $jam; ?></div>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
			</div>
		</div>   

	<?php	endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['agendawd'] = sanitize_text_field( $new_instance['agendawd'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Agenda';
		$agendawd     = isset( $instance['agendawd'] ) ? esc_attr( $instance['agendawd'] ) : 3; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Agenda terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'agendawd' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'agendawd' ); ?>" name="<?php echo $this->get_field_name( 'agendawd' ); ?>" type="number" value="<?php echo $agendawd; ?>" /></p>

    <?php
	}
}