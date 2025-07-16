<?php

/*
 * Register widget (sidebar).
 *
 */
function mading_widgets_init() {
	require get_template_directory().'/widgets/recent-posts.php';
	register_widget('Recentposts_thumbnail');
	require get_template_directory().'/widgets/school-maps.php';
	register_widget('SchoolMaps');
	require get_template_directory().'/widgets/gurus.php';
	register_widget('Gurus');
	require get_template_directory().'/widgets/agenda.php';
	register_widget('RecentAgenda');
	require get_template_directory().'/widgets/pengumuman.php';
	register_widget('RecentPengumuman');
	require get_template_directory().'/widgets/recent-blog.php';
	register_widget('RecentBlog');
	require get_template_directory().'/widgets/prestasi.php';
	register_widget('PrestasiWid');
	require get_template_directory().'/widgets/schools.php';
	register_widget('Schools');
	require get_template_directory().'/widgets/videos.php';
	register_widget('Videos');

	register_sidebar(array(
		'name' => __('Sidebar', 'mading'),
		'before_widget' => '<div id="%1$s" class="%2$s widget clear">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'name' => __('Footbar Kiri', 'mading'),
		'before_widget' => '<div id="%1$s" class="%2$s widget clear">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar(array(
		'name' => __('Footbar Tengah', 'mading'),
		'before_widget' => '<div id="%1$s" class="%2$s widget clear">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('Footbar Kanan', 'mading'),
		'before_widget' => '<div id="%1$s" class="%2$s widget clear">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
}
add_action('widgets_init', 'mading_widgets_init');

?>