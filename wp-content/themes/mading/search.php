<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>

					<div class="clear">
						<div class="post-meta">
							<h1>
								<?php if (get_post_type(get_the_ID()) == 'post') {
									echo '<i class="fa fa-search"></i> Cari Berita : ';
								} elseif (get_post_type(get_the_ID()) == 'pengumuman') {
									echo '<i class="fa fa-search"></i> Cari Pengumuman : ';
								} elseif (get_post_type(get_the_ID()) == 'blog') {
									echo '<i class="fa fa-search"></i> Cari Artikel : ';
								} elseif (get_post_type(get_the_ID()) == 'agenda') {
									echo '<i class="fa fa-search"></i> Cari Agenda : ';
								} elseif (get_post_type(get_the_ID()) == 'fasilitas') {
									echo '<i class="fa fa-search"></i> Cari Fasilitas : ';
								} elseif (get_post_type(get_the_ID()) == 'ekskul') {
									echo '<i class="fa fa-search"></i> Cari Ekskul : ';
								} elseif (get_post_type(get_the_ID()) == 'prestasi') {
									echo '<i class="fa fa-search"></i> Cari Prestasi : ';
								} elseif (get_post_type(get_the_ID()) == 'editorial') {
									echo '<i class="fa fa-search"></i> Cari Editorial : ';
								} else {
									echo '<i class="fa fa-search"></i> Cari Pos : ';
								} ?>
								"<?php the_search_query(); ?>"
							</h1>
						</div>
						<?php if (get_post_type(get_the_ID()) == 'post') {
							get_template_part('loop/loop');
						} elseif (get_post_type(get_the_ID()) == 'pengumuman') {
							get_template_part('loop/pengumuman');
						} elseif (get_post_type(get_the_ID()) == 'blog') {
							get_template_part('loop/blog');
						} elseif (get_post_type(get_the_ID()) == 'agenda') {
							get_template_part('loop/agenda');
						} elseif (get_post_type(get_the_ID()) == 'fasilitas') {
							get_template_part('loop/fasilitas');
						} elseif (get_post_type(get_the_ID()) == 'ekskul') {
							get_template_part('loop/ekskul');
						} elseif (get_post_type(get_the_ID()) == 'prestasi') {
							get_template_part('loop/prestasi');
						} elseif (get_post_type(get_the_ID()) == 'editorial') {
							get_template_part('loop/editorial');
						} else {
							get_template_part('loop/loop');
						} ?>

					</div>

				<?php else: ?>

					<div class="clear">
						<div class="post-meta">
							<h1><?php _e('Tidak ada hasil pencarian', 'mading'); ?> "<?php the_search_query(); ?>"</h1>
						</div>
					</div>

				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>