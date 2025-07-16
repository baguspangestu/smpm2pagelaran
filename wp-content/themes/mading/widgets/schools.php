<?php
class Schools extends WP_Widget {
	function __construct() {
		parent::__construct(
			'schools',
			esc_html__( 'Mading : Data Sekolah', 'mading' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Data Sekolah', 'mading' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Data Sekolah' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		?>
            <div class="widmading clear">
			    <div class="post-content wdc">
				    <h4><?php echo (get_option('sekolah')) ? get_option('sekolah').'' : 'SMA Negeri 12 Sumber Jaya' ?></h4>
					NPSN : <?php echo (get_option('npsn')) ? get_option('npsn').'' : '347446868' ?><br/><br/>
				</div>
				<div class="post-content">
					<?php echo (get_option('alamat')) ? get_option('alamat').'' : 'Jl. Lintas Liwa No. 39' ?>
				</div>
				<div class="post-content">
					KEC. <span><?php echo (get_option('kecamatan')) ? get_option('kecamatan').'' : 'Kecamatan' ?></span>
				</div>
				<div class="post-content">
					KAB. <span><?php echo (get_option('kabupaten')) ? get_option('kabupaten').'' : 'Kabupaten' ?></span>
				</div>
				<div class="post-content">
					PROV. <span><?php echo (get_option('provinsi')) ? get_option('provinsi').'' : 'Provinsi' ?></span>
				</div>
				<div class="post-content">
					KODE POS <span><?php echo (get_option('kodepos')) ? get_option('kodepos').'' : '11111' ?></span>
				</div>
			</div>
    	<?php	
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}
		
		
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Data Sekolah'; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Data Sekolah di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
	
    <?php
	}
}