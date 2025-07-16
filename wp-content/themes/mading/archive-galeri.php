<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<div class="clear">
					<div class="post-meta">
						<h1>
							<?php printf(__('<i class="fa fa-photo"></i> Galeri Album', 'mading')); ?>
						</h1>
					</div>

					<?php get_template_part('loop/album'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>