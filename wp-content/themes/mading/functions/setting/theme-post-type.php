<?php

add_action('init', 'create_post_type');

function create_post_type()
{

	/*** POST TYPE SLIDER HOMEPAGE ***/

	register_post_type(
		'slider',
		array(
			'menu_icon' => 'dashicons-images-alt2',
			'labels' => array(
				'name' => __('Slideshow'),
				'singular_name' => __('Slideshow'),
				'add_new' => __('Tambah Slide?'),
				'add_new_item' => __('Tambah Slide'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Slide'),
				'new_item' => __('Slide Baru'),
				'view' => __('Lihat Slide'),
				'view_item' => __('Lihat Slide'),
				'search_items' => __('Cari Slide'),
				'not_found' => __('Tidak ada Slide ditemukan'),
				'not_found_in_trash' => __('Tidak ada Slide di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
		)
	);

	/*** POST TYPE EDITORIAL KEPALA ***/

	register_post_type(
		'editorial',
		array(
			'menu_icon' => 'dashicons-index-card',
			'labels' => array(
				'name' => __('Editorial'),
				'singular_name' => __('Editorial'),
				'add_new' => __('Tambah Tulisan?'),
				'add_new_item' => __('Tambah Tulisan'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Tulisan'),
				'new_item' => __('Tulisan Baru'),
				'view' => __('Lihat Tulisan'),
				'view_item' => __('Lihat Tulisan'),
				'search_items' => __('Cari Tulisan'),
				'not_found' => __('Tidak ada Tulisan ditemukan'),
				'not_found_in_trash' => __('Tidak ada Tulisan di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'comments'),
			'exclude_from_search' => false,
		)
	);

	/*** POST TYPE BLOG GURU ***/

	register_post_type(
		'blog',
		array(
			'menu_icon' => 'dashicons-format-status',
			'labels' => array(
				'name' => __('Blog Guru'),
				'singular_name' => __('Blog Guru'),
				'add_new' => __('Tambah Tulisan?'),
				'add_new_item' => __('Tambah Tulisan'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Tulisan'),
				'new_item' => __('Tulisan Baru'),
				'view' => __('Lihat Tulisan'),
				'view_item' => __('Lihat Tulisan'),
				'search_items' => __('Cari Tulisan'),
				'not_found' => __('Tidak ada Tulisan ditemukan'),
				'not_found_in_trash' => __('Tidak ada Tulisan di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'comments'),
			'exclude_from_search' => false,
		)
	);

	/*** POST TYPE PENGUMUMAN ***/

	register_post_type(
		'pengumuman',
		array(
			'menu_icon' => 'dashicons-format-aside',
			'labels' => array(
				'name' => __('Pengumuman'),
				'singular_name' => __('Pengumuman'),
				'add_new' => __('Tambah Pengumuman?'),
				'add_new_item' => __('Tambah Pengumuman'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Pengumuman'),
				'new_item' => __('Pengumuman Baru'),
				'view' => __('Lihat Pengumuman'),
				'view_item' => __('Lihat Pengumuman'),
				'search_items' => __('Cari Pengumuman'),
				'not_found' => __('Tidak ada Pengumuman ditemukan'),
				'not_found_in_trash' => __('Tidak ada Pengumuman di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
		)
	);

	// SEKILAS INFO

	register_post_type(
		'sekilas-info',
		array(
			'menu_icon' => 'dashicons-controls-back',
			'labels' => array(
				'name' => __('Info Sekolah'),
				'singular_name' => __('Info Sekolah'),
				'add_new' => __('Data info baru?'),
				'add_new_item' => __('Tambah info baru'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit info'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat info'),
				'view_item' => __('Lihat info'),
				'search_items' => __('Cari info'),
				'not_found' => __('Tidak ada info ditemukan'),
				'not_found_in_trash' => __('Tidak ada info di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('editor'),
			'exclude_from_search' => false,
		)
	);

	// QUOTES

	register_post_type(
		'quotes',
		array(
			'menu_icon' => 'dashicons-format-chat',
			'labels' => array(
				'name' => __('Quotes / Kutipan'),
				'singular_name' => __('Quotes / Kutipan'),
				'add_new' => __('Tambah Quotes?'),
				'add_new_item' => __('Tambah Quotes baru'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Quotes'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Quotes'),
				'view_item' => __('Lihat Quotes'),
				'search_items' => __('Cari Quotes'),
				'not_found' => __('Tidak ada Quotes ditemukan'),
				'not_found_in_trash' => __('Tidak ada Quotes di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('editor'),
			'exclude_from_search' => false,
			'register_meta_box_cb' => 'nama',
		)
	);

	function nama()
	{
		add_meta_box('namatokoh', 'Nama Tokoh Pembuat Quotes', 'namatokoh', 'quotes', 'normal', 'default');
	}

	function namatokoh()
	{
		global $post;
		echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
			wp_create_nonce(plugin_basename(__FILE__)) . '" />';

		$nama = get_post_meta($post->ID, '_nama', true);
		echo '<input type="text" name="_nama" value="' . $nama  . '" class="widefat" />';
	}

	function nama_meta($post_id, $post)
	{
		if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {
			return $post->ID;
		}
		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;
		$events_meta['_nama'] = $_POST['_nama'];

		foreach ($events_meta as $key => $value) {
			if ($post->post_type == 'revision') return;
			$value = implode(',', (array)$value);
			if (get_post_meta($post->ID, $key, FALSE)) {
				update_post_meta($post->ID, $key, $value);
			} else {
				add_post_meta($post->ID, $key, $value);
			}
			if (!$value) delete_post_meta($post->ID, $key);
		}
	}

	add_action('save_post', 'nama_meta', 1, 2);


	/*** POST TYPE AGENDA ***/

	register_post_type(
		'agenda',
		array(
			'labels' => array(
				'name' => __('Agenda'),
				'singular_name' => __('Agenda'),
				'add_new' => __('Tambah Agenda?'),
				'add_new_item' => __('Tambah Agenda'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Agenda'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Agenda'),
				'view_item' => __('Lihat Agenda'),
				'search_items' => __('Cari Agenda'),
				'not_found' => __('Tidak ada Agenda ditemukan'),
				'not_found_in_trash' => __('Tidak ada Agenda di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
			'register_meta_box_cb' => 'event',
		)
	);

	function event()
	{
		add_meta_box('akademi_events', 'Data Agenda', 'akademi_events', 'agenda', 'side', 'default');
	}

	function akademi_events()
	{
		global $post;
		echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
			wp_create_nonce(plugin_basename(__FILE__)) . '" />';

		$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
		$tevent = get_post_meta($post->ID, '_tevent', true);
		$jam = get_post_meta($post->ID, '_jam', true);
		$lokasi = get_post_meta($post->ID, '_lokasi', true);
		$hariini = strtotime(date("Y-m-d"));
		$sekarang = strtotime(date("Y-m-d"));
		$currents = $sekarang - $minus;

		echo '<p>Tanggal Agenda</p>';
		echo '<input type="text" name="_tevent" value="' . $tevent . '" class="tevent widefat" />';
		echo '<p>Jam  (contoh 01:30)</p>';
		echo '<input type="text" name="_jam" value="' . $jam . '" class="widefat" />';
		echo '<p>Lokasi</p>';
		echo '<input type="text" name="_lokasi" value="' . $lokasi . '" class="widefat" />';
?>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('.tevent').datepicker({
					dateFormat: 'dd-mm-yy'
				});
			});
		</script>

	<?php

		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
	}

	function akademi_events_meta($post_id, $post)
	{
		if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {
			return $post->ID;
		}

		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;

		$events_meta['_minus'] = strtotime($_POST['_tevent']);
		$events_meta['_tevent'] = $_POST['_tevent'];
		$events_meta['_jam'] = $_POST['_jam'];
		$events_meta['_lokasi'] = $_POST['_lokasi'];

		foreach ($events_meta as $key => $value) {
			if ($post->post_type == 'revision') return;
			$value = implode(',', (array)$value);
			if (get_post_meta($post->ID, $key, FALSE)) {
				update_post_meta($post->ID, $key, $value);
			} else {
				add_post_meta($post->ID, $key, $value);
			}
			if (!$value) delete_post_meta($post->ID, $key);
		}
	}

	add_action('save_post', 'akademi_events_meta', 1, 2); // save the custom fields



	/*** POST TYPE DOWNLOAD ***/

	register_post_type(
		'download',
		array(
			'menu_icon' => 'dashicons-arrow-down-alt2',
			'labels' => array(
				'name' => __('Download'),
				'singular_name' => __('Download'),
				'add_new' => __('Tambah Download?'),
				'add_new_item' => __('Tambah Download'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Download'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Download'),
				'view_item' => __('Lihat Download'),
				'search_items' => __('Cari Download'),
				'not_found' => __('Tidak ada Download ditemukan'),
				'not_found_in_trash' => __('Tidak ada Download di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor'),
			'exclude_from_search' => false,
			'register_meta_box_cb' => 'add_upload_file_metaboxes',
		)
	);


	function add_upload_file_metaboxes()
	{
		add_meta_box('swp_file_upload', 'File Upload', 'swp_file_upload', 'download', 'normal', 'default');
	}


	function swp_file_upload()
	{
		global $post;
		// Noncename needed to verify where the data originated
		echo '<input type="hidden" name="podcastmeta_noncename" id="podcastmeta_noncename" value="' .
			wp_create_nonce(plugin_basename(__FILE__)) .
			'" />';
		global $wpdb;
		$strFile = get_post_meta($post->ID, $key = 'podcast_file', true);
		$sizeFile = get_post_meta($post->ID, $key = 'size_file', true);
		$typeFile = get_post_meta($post->ID, $key = 'type_file', true);
		$iconFile = get_post_meta($post->ID, $key = 'icon_file', true);
		$media_file = get_post_meta($post->ID, $key = '_wp_attached_file', true);
		if (!empty($media_file)) {
			$strFile = $media_file;
		} ?>


		<script type="text/javascript">
			// Uploading files
			var file_frame;
			jQuery('#upload_image_button').live('click', function(podcast) {

				podcast.preventDefault();

				// If the media frame already exists, reopen it.
				if (file_frame) {
					file_frame.open();
					return;
				}

				// Create the media frame.
				file_frame = wp.media.frames.file_frame = wp.media({
					title: jQuery(this).data('uploader_title'),
					button: {
						text: jQuery(this).data('uploader_button_text'),
					},
					multiple: false // Set to true to allow multiple files to be selected
				});

				// When a file is selected, run a callback.
				file_frame.on('select', function() {
					// We set multiple to false so only get one image from the uploader
					attachment = file_frame.state().get('selection').first().toJSON();

					// here are some of the variables you could use for the attachment;
					var all = JSON.stringify(attachment);
					var url = attachment.url;
					var subtype = attachment.subtype;
					var filesizeHumanReadable = attachment.filesizeHumanReadable;
					var icon = attachment.icon;

					var namefile = document.getElementById("podcast_file");
					var sizefile = document.getElementById("size_file");
					var typefile = document.getElementById("type_file");
					var iconfile = document.getElementById("icon_file");

					namefile.value = url;
					sizefile.value = filesizeHumanReadable;
					typefile.value = subtype;
					iconfile.value = icon;
				});

				// Finally, open the modal
				file_frame.open();
			});
		</script>

		<p>Unggah file melalui form di bawah ini atau pilih file dari Pustaka Media / Media Library </p>
		<input type="text" name="podcast_file" placeholder="tekan tombol upload dibawah..." id="podcast_file"
			value="<?php echo $strFile; ?>" class="widefat" />
		<input type="hidden" name="size_file" placeholder="tekan tombol upload dibawah..." id="size_file"
			value="<?php echo $sizeFile; ?>" class="widefat" />
		<input type="hidden" name="type_file" placeholder="tekan tombol upload dibawah..." id="type_file"
			value="<?php echo $typeFile; ?>" class="widefat" />
		<input type="hidden" name="icon_file" placeholder="tekan tombol upload dibawah..." id="icon_file"
			value="<?php echo $iconFile; ?>" class="widefat" />
		<p><input id="upload_image_button" type="button" value="Upload" class="button button-primary button-large" /></p>
		<input type="hidden" name="img_txt_id" id="img_txt_id" value="" />

<?php
		function admin_scripts()
		{
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}

		function admin_styles()
		{
			wp_enqueue_style('thickbox');
		}
		add_action('admin_print_scripts', 'admin_scripts');
		add_action('admin_print_styles', 'admin_styles');
	}


	//Saving the file
	function save_podcasts_meta($post_id, $post)
	{
		// verify this came from the our screen and with proper authorization,
		// because save_post can be triggered at other times
		if (!wp_verify_nonce($_POST['podcastmeta_noncename'], plugin_basename(__FILE__))) {
			return $post->ID;
		}
		// Is the user allowed to edit the post?
		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;
		// We need to find and save the data
		// We'll put it into an array to make it easier to loop though.
		$podcasts_meta['podcast_file'] = $_POST['podcast_file'];
		$podcasts_meta['size_file'] = $_POST['size_file'];
		$podcasts_meta['type_file'] = $_POST['type_file'];
		$podcasts_meta['icon_file'] = $_POST['icon_file'];
		// Add values of $podcasts_meta as custom fields

		foreach ($podcasts_meta as $key => $value) {
			if ($post->post_type == 'revision') return;
			$value = implode(',', (array) $value);
			if (get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value it will update
				update_post_meta($post->ID, $key, $value);
			} else { // If the custom field doesn't have a value it will add
				add_post_meta($post->ID, $key, $value);
			}
			if (!$value) delete_post_meta($post->ID, $key); // Delete if blank value
		}
	}
	add_action('save_post', 'save_podcasts_meta', 1, 2); // save the custom fields

	/*** POST TYPE GALERI ***/

	register_post_type(
		'galeri',
		array(
			'menu_icon' => 'dashicons-format-gallery',
			'labels' => array(
				'name' => __('Galeri'),
				'singular_name' => __('Galeri'),
				'add_new' => __('Tambah Galeri?'),
				'add_new_item' => __('Tambah Galeri'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Galeri'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Galeri'),
				'view_item' => __('Lihat Galeri'),
				'search_items' => __('Cari Galeri'),
				'not_found' => __('Tidak ada Galeri ditemukan'),
				'not_found_in_trash' => __('Tidak ada Galeri di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'exclude_from_search' => false,
		)
	);

	/*** POST TYPE VIDEO ***/

	register_post_type(
		'video',
		array(
			'menu_icon' => 'dashicons-video-alt3',
			'labels' => array(
				'name' => __('Video'),
				'singular_name' => __('Video'),
				'add_new' => __('Tambah Video?'),
				'add_new_item' => __('Tambah Video'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Video'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Video'),
				'view_item' => __('Lihat Video'),
				'search_items' => __('Cari Video'),
				'not_found' => __('Tidak ada Video ditemukan'),
				'not_found_in_trash' => __('Tidak ada Video di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor'),
			'exclude_from_search' => false,
			'register_meta_box_cb' => 'vid',
		)
	);

	function vid()
	{
		add_meta_box('sch_vid', 'Video Galeri', 'sch_vid', 'video', 'side', 'default');
	}

	function sch_vid()
	{
		global $post;
		echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
			wp_create_nonce(plugin_basename(__FILE__)) . '" />';

		$embed = get_post_meta($post->ID, '_embed', true);

		echo '<p>Untuk memudahkan penambahan video, gunakan embed video dari Youtube, cukup masukkan ID Video</p>';
		echo '<p>ID Video Youtube</p>';
		echo '<input type="text" name="_embed" value="' . $embed  . '" class="widefat" />';
	}

	function vid_meta($post_id, $post)
	{
		if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {
			return $post->ID;
		}

		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;

		$events_meta['_embed'] = $_POST['_embed'];

		foreach ($events_meta as $key => $value) {
			if ($post->post_type == 'revision') return;
			$value = implode(',', (array)$value);
			if (get_post_meta($post->ID, $key, FALSE)) {
				update_post_meta($post->ID, $key, $value);
			} else {
				add_post_meta($post->ID, $key, $value);
			}
			if (!$value) delete_post_meta($post->ID, $key);
		}
	}

	add_action('save_post', 'vid_meta', 1, 2);

	/*** POST TYPE FASILITAS ***/

	register_post_type(
		'fasilitas',
		array(
			'menu_icon' => 'dashicons-clipboard',
			'labels' => array(
				'name' => __('Fasilitas Sekolah'),
				'singular_name' => __('Fasilitas Sekolah'),
				'add_new' => __('Tambah Fasilitas?'),
				'add_new_item' => __('Tambah Fasilitas'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Fasilitas'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Fasilitas'),
				'view_item' => __('Lihat Item'),
				'search_items' => __('Cari Item'),
				'not_found' => __('Tidak ada Fasilitas ditemukan'),
				'not_found_in_trash' => __('Tidak ada Fasilitas di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
		)
	);

	/*** POST TYPE PRESTASI ***/

	register_post_type(
		'prestasi',
		array(
			'menu_icon' => 'dashicons-heart',
			'labels' => array(
				'name' => __('Prestasi'),
				'singular_name' => __('Prestasi'),
				'add_new' => __('Tambah Prestasi?'),
				'add_new_item' => __('Tambah Prestasi'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Prestasi'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Prestasi'),
				'view_item' => __('Lihat Prestasi'),
				'search_items' => __('Cari Prestasi'),
				'not_found' => __('Tidak ada Prestasi ditemukan'),
				'not_found_in_trash' => __('Tidak ada Prestasi di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
			'register_meta_box_cb' => 'pres',
		)
	);

	function pres()
	{
		add_meta_box('sch_pres', 'Peraih Prestasi', 'sch_pres', 'prestasi', 'normal', 'default');
	}

	function sch_pres()
	{
		global $post;
		echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
			wp_create_nonce(plugin_basename(__FILE__)) . '" />';

		$peraih = get_post_meta($post->ID, '_peraih', true);

		echo '<p>Tuliskan nama atau grup yang mewakili, misalkan : <strong>Moh. Haryanto</strong> atau <strong>Team Basket</strong></p>';
		echo '<input type="text" name="_peraih" value="' . $peraih  . '" class="widefat" />';
	}

	function pres_meta($post_id, $post)
	{
		if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {
			return $post->ID;
		}

		if (!current_user_can('edit_post', $post->ID))
			return $post->ID;

		$events_meta['_peraih'] = $_POST['_peraih'];

		foreach ($events_meta as $key => $value) {
			if ($post->post_type == 'revision') return;
			$value = implode(',', (array)$value);
			if (get_post_meta($post->ID, $key, FALSE)) {
				update_post_meta($post->ID, $key, $value);
			} else {
				add_post_meta($post->ID, $key, $value);
			}
			if (!$value) delete_post_meta($post->ID, $key);
		}
	}

	add_action('save_post', 'pres_meta', 1, 2);

	/*** EKSTRA KULIKULER ***/

	register_post_type(
		'ekskul',
		array(
			'menu_icon' => 'dashicons-feedback',
			'labels' => array(
				'name' => __('Ekstra Kulikuler'),
				'singular_name' => __('Ekstra Kulikuler'),
				'add_new' => __('Tambah Ekskul?'),
				'add_new_item' => __('Tambah Ekskul'),
				'edit' => __('Edit'),
				'edit_item' => __('Edit Ekskul'),
				'new_item' => __('Item Baru'),
				'view' => __('Lihat Ekskul'),
				'view_item' => __('Lihat Ekskul'),
				'search_items' => __('Cari Ekskul'),
				'not_found' => __('Tidak ada Ekskul ditemukan'),
				'not_found_in_trash' => __('Tidak ada Ekskul di folder Trash'),
				'parent' => __('Parent Super Duper'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'exclude_from_search' => false,
		)
	);
}


?>