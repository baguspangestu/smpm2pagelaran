<?php get_header(); ?>

<section class="madinn pwhite clear">
  <div class="ext__container">

    <div class="content">
      <div class="madings">
        <div class="clear">
          <div class="post-meta">
            <h1>
              <?php $post = $posts[0];
							if (is_category()) {
								printf('<i class="fa fa-folder"></i> Kategori : %s', single_cat_title('', false));
							} elseif (is_tag()) {
								printf(__('<i class="fa fa-folder"></i> Tag : %s', 'akademi'), single_tag_title('', false));
							} elseif (is_day()) {
								printf(_c('<i class="fa fa-folder"></i> Arsip hari %s'), get_the_time('j M Y'));
							} elseif (is_month()) {
								printf(_c('<i class="fa fa-folder"></i> Arsip bulan %s'), get_the_time('F Y'));
							} elseif (is_year()) {
								printf(_c('<i class="fa fa-folder"></i> Arsip tahun %s'), get_the_time('Y'));
							} elseif (is_author()) {
								_e('<i class="fa fa-folder"></i> Arsip Penulis', 'akademi');
							} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
								_e('<i class="fa fa-folder"></i> Arsip Tulisan', 'akademi');
							} ?>
            </h1>
          </div>

          <?php get_template_part('loop/loop'); ?>

          <?php get_template_part('pagination'); ?>
        </div>
      </div>
    </div>

    <?php get_sidebar(); ?>
  </div>
</section>

<?php get_footer(); ?>