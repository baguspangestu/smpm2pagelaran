<?php

add_action( 'init', 'create_school_post_type' );

function create_school_post_type() {
/*** POST TYPE DAFTAR Dosen ***/

/*** POST TYPE DAFTAR GURU ***/
	
	register_post_type( 'gtk',		
	array(			
	    'menu_icon' => 'dashicons-groups',
	    'labels' => array(				
	    'name' => __( 'Data GTK' ),				
	    'singular_name' => __( 'Data GTK' ),        
	    'add_new' => __( 'Tambah Data GTK?' ),	
	    'add_new_item' => __( 'Tambah Data GTK' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Data GTK' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Data GTK' ),	
	    'view_item' => __( 'Lihat Data GTK' ),	
	    'search_items' => __( 'Cari Data GTK' ),	
	    'not_found' => __( 'Tidak ada data GTK ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada daftar GTK di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'thumbnail'),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'guru',
		 )	
    );
	
		function guru() {
	    add_meta_box('guru_data', 'Diodata GTK', 'guru_data', 'gtk', 'normal', 'default');
	}

	function guru_data() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    $nik = get_post_meta($post->ID, '_nik', true);
		$nip = get_post_meta($post->ID, '_nip', true);
		$nuptk = get_post_meta($post->ID, '_nuptk', true);
	    $sex = get_post_meta($post->ID, '_sex', true);
		$ttl = get_post_meta($post->ID, '_ttl', true);
		$rel = get_post_meta($post->ID, '_rel', true);
		$pen = get_post_meta($post->ID, '_pen', true);
		$stat = get_post_meta($post->ID, '_stat', true);
		$jen = get_post_meta($post->ID, '_jen', true);
		$jur = get_post_meta($post->ID, '_jur', true);
		$add = get_post_meta($post->ID, '_add', true);
		$telp = get_post_meta($post->ID, '_telp', true);
		$email = get_post_meta($post->ID, '_email', true);
		$fb = get_post_meta($post->ID, '_fb', true);

			echo '<p>NIK</p>';
	        echo '<input type="text" name="_nik" value="' . $nik  . '" class="widefat" />';
			echo '<p>NIP</p>';
	        echo '<input type="text" name="_nip" value="' . $nip  . '" class="widefat" />';
			echo '<p>NUPTK</p>';
	        echo '<input type="text" name="_nuptk" value="' . $nuptk  . '" class="widefat" />';
			
			echo '<p>Jenis Kelamin : (Laki-laki, Perempuan)</p>';
			echo '<input type="text" name="_sex" value="' . $sex  . '" class="widefat" />';
			
	        echo '<p>T.T.L (contoh: Lampung, 12 Juli 2000)</p>';
	        echo '<input type="text" name="_ttl" value="' . $ttl  . '" class="widefat" />';
			
			echo '<p>Agama : (Islam, Kristen, Katholik, Hindu, Budha, Konghucu, Lain-lain)</p>';
			echo '<input type="text" name="_rel" value="' . $rel  . '" class="widefat" />';
			
			echo '<p>Status Pegawai : (PNS, CPNS, Guru Bantu, Guru Honor, Tenaga Honor)</p>';
	        echo '<input type="text" name="_stat" value="' . $stat  . '" class="widefat" />';
			
			echo '<p>Jenis GTK : (Guru kelas, Guru BP, Guru Pendamping, Guru Magang, Administrasi, Lain-lain)</p>';
	        echo '<input type="text" name="_jen" value="' . $jen  . '" class="widefat" />';
			
			echo '<p>Pendidikan Terakhir</p>';
	        echo '<input type="text" name="_pen" value="' . $pen  . '" class="widefat" />';
			echo '<p>Jurusan</p>';
	        echo '<input type="text" name="_jur" value="' . $jur  . '" class="widefat" />';
			
			echo '<p>Alamat</p>';
	        echo '<input type="text" name="_add" value="' . $add  . '" class="widefat" />';
			echo '<p>Telepon</p>';
	        echo '<input type="text" name="_telp" value="' . $telp  . '" class="widefat" />';
			echo '<p>Email</p>';
	        echo '<input type="text" name="_email" value="' . $email  . '" class="widefat" />';
			echo '<p>Facebook</p>';
	        echo '<input type="text" name="_fb" value="' . $fb  . '" class="widefat" />';
	}
	
	function guru_data_meta($post_id, $post) {

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }
	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    $events_meta['_nik'] = $_POST['_nik'];
		$events_meta['_nip'] = $_POST['_nip'];
		$events_meta['_nuptk'] = $_POST['_nuptk'];
		$events_meta['_sex'] = $_POST['_sex'];
		$events_meta['_ttl'] = $_POST['_ttl'];
		$events_meta['_rel'] = $_POST['_rel'];
		$events_meta['_pen'] = $_POST['_pen'];
		$events_meta['_stat'] = $_POST['_stat'];
		$events_meta['_jen'] = $_POST['_jen'];
		$events_meta['_jur'] = $_POST['_jur'];
		$events_meta['_add'] = $_POST['_add'];
		$events_meta['_telp'] = $_POST['_telp'];
		$events_meta['_email'] = $_POST['_email'];
		$events_meta['_fb'] = $_POST['_fb'];
		
	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'guru_data_meta', 1, 2); // save the custom fields
	
/*** POST TYPE DAFTAR SISWA ***/
	
	register_post_type( 'siswa',		
	array(			
	    'menu_icon' => 'dashicons-groups',
	    'labels' => array(				
	    'name' => __( 'Data Siswa' ),				
	    'singular_name' => __( 'Data Siswa' ),        
	    'add_new' => __( 'Tambah Data Siswa?' ),	
	    'add_new_item' => __( 'Tambah Data Siswa' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Data Siswa' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Data Siswa' ),	
	    'view_item' => __( 'Lihat Data Siswa' ),	
	    'search_items' => __( 'Cari Data Siswa' ),	
	    'not_found' => __( 'Tidak ada data Siswa ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada daftar Siswa di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'thumbnail'),        			            
		'exclude_from_search' => true, 	 
		'register_meta_box_cb' => 'sss',
		 )	
    );
	
		function sss() {
	    add_meta_box('sis_data', 'Diodata Siswa', 'sis_data', 'siswa', 'normal', 'default');
	}

	function sis_data() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    $nisn = get_post_meta($post->ID, '_nisn', true);
	    $sex = get_post_meta($post->ID, '_sex', true);
		$ttl = get_post_meta($post->ID, '_ttl', true);
		$rel = get_post_meta($post->ID, '_rel', true);
		$add = get_post_meta($post->ID, '_add', true);
		$telp = get_post_meta($post->ID, '_telp', true);
		$mas = get_post_meta($post->ID, '_mas', true);

			echo '<p>NISN</p>';
	        echo '<input type="text" name="_nisn" value="' . $nisn  . '" class="widefat" />';
			echo '<p>Jenis Kelamin : (Laki-Laki, Perempuan)</p>';
			echo '<input type="text" name="_sex" value="' . $sex  . '" class="widefat" />';
	        echo '<p>T.T.L (contoh: Lampung, 12 Juli 2000)</p>';
	        echo '<input type="text" name="_ttl" value="' . $ttl  . '" class="widefat" />';
			echo '<p>Agama : (Islam, Kristen, Katholik, Hindu, Budha, Konghucu, Lain-lain)</p>';
			echo '<input type="text" name="_rel" value="' . $rel  . '" class="widefat" />';
			echo '<p>Alamat</p>';
	        echo '<input type="text" name="_add" value="' . $add  . '" class="widefat" />';
			echo '<p>Telepon</p>';
	        echo '<input type="text" name="_telp" value="' . $telp  . '" class="widefat" />';
			echo '<p>Awal Masuk</p>';
	        echo '<input type="text" name="_mas" value="' . $mas  . '" class="widefat" />';
	}
	
	function sis_data_meta($post_id, $post) {

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }
	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    $events_meta['_nisn'] = $_POST['_nisn'];
		$events_meta['_sex'] = $_POST['_sex'];
		$events_meta['_ttl'] = $_POST['_ttl'];
		$events_meta['_rel'] = $_POST['_rel'];
		$events_meta['_add'] = $_POST['_add'];
		$events_meta['_telp'] = $_POST['_telp'];
		$events_meta['_mas'] = $_POST['_mas'];
		
	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'sis_data_meta', 1, 2); // save the custom fields
	
/*** POST TYPE DAFTAR STATUS ***/
	
	register_post_type( 'status',		
	array(			
	    'menu_icon' => 'dashicons-grid-view',
	    'labels' => array(				
	    'name' => __( 'Kelas & Alumni' ),				
	    'singular_name' => __( 'Kelas & Alumni' ),        
	    'add_new' => __( 'Tambah Data Baru?' ),	
	    'add_new_item' => __( 'Tambah Data Baru' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Data' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Data Status' ),	
	    'view_item' => __( 'Lihat Data Status' ),	
	    'search_items' => __( 'Cari Data Status' ),	
	    'not_found' => __( 'Tidak ada data Status ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada daftar Status di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title'),        			            
		'exclude_from_search' => true, 
		 )	
    );
	

}

	add_action( 'init', 'kelas_taxonomy', 0 );
	function kelas_taxonomy() {
	  $labels = array(
	    'name' => _x( 'Kelas / Alumni', 'taxonomy general name' ),
	    'singular_name' => _x( 'Kelas / Alumni', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Cari Kelas / Alumni' ),
	    'all_items' => __( 'Semua Kelas / Alumni' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Kelas / Alumni' ),
	    'update_item' => __( 'Update Kelas / Alumni' ),
	    'add_new_item' => __( 'Tambah Baru' ),
	    'new_item_name' => __( 'Tambah Kelas / Alumni Baru' ),
	    'menu_name' => __( 'Kelas / Alumni' ),
	  );   
	// Now register the taxonomy
	  register_taxonomy('status',array('siswa'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	}
	
?>