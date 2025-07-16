<?php

/*
 * Tema mading Wordpress.
 * Pengaturan baru akan berjalan setelah tema diaktifkan
 * Mengganti pengaturan tema sebelumnya
 */
function mading_setup() {
$sheight = get_option('sheight');
			if ( ! $sheight ) {
			$sheight = 525;
	    	}
	$swidth = get_option('swidth');
			if ( ! $swidth ) {
			$swidth = 1100;
	    	}
	add_theme_support('automatic-feed-links');

	add_theme_support('post-thumbnails');
	add_image_size('slider', $swidth, $sheight, true);
	add_image_size('news', 600, 450, true);
	add_image_size('photo', 300, 400, true);
	add_image_size('small', 80, 60, true);

	register_nav_menus(array(
		'navigation' => __('Tampilkan di Navigasi Header', 'mading'),
	));

	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list',
	));
}
add_action('after_setup_theme', 'mading_setup');

if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
	update_option('posts_per_page', 9);
	update_option('paging_mode', 'default');
}

add_action('do_meta_boxes', 'replace_featured_image_box');
function replace_featured_image_box()
{
    remove_meta_box( 'postimagediv', 'siswa', 'side' );
    add_meta_box('postimagediv', __('Upload Photo, 300x400pixel'), 'post_thumbnail_meta_box', 'siswa', 'side', 'low');
	remove_meta_box( 'postimagediv', 'gtk', 'side' );
    add_meta_box('postimagediv', __('Upload Photo, 300x400pixel'), 'post_thumbnail_meta_box', 'gtk', 'side', 'low');
}

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;
	global $wp_query;

	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	if ( $paged >= 1 )
		$links[] = $paged;
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo ' … ';
	}

	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo ' … ' . "\n";
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

}

function filter_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size, $alt) {
  $html = str_replace('><img', ' data-lightbox="'.$id.'"><img', $html);

  return $html;
}
add_filter('image_send_to_editor', 'filter_image_send_to_editor', 10, 8);

?>