<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">
		<div class="content">
			<div class="madings">
				<div class="clear">
					<div class="post-meta">
						<h1>
							<i class="fa fa-solid fa-bullhorn"></i>
							<?php echo (get_option('gtumum')) ? get_option('gtumum') : 'pengumuman' ?>
						</h1>
					</div>

					<?php get_template_part('loop/pengumuman'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>