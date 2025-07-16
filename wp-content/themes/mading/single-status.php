<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php
				$status = $post->post_name;
				query_posts('post_type=siswa&showposts=300&status=' . $status . '&orderby=title&order=ASC'); ?>

				<?php if (have_posts()) { ?>
					<?php $count = 0; ?>
					<div id="loop" class="list archives clear">
						<div class="oversis">
							<table class="siswa" width="100%">
								<tr>
									<td class="ctr"><strong>No.</strong></td>
									<td><strong>Nama</strong></td>
									<td><strong>NISN</strong></td>
									<td><strong>Status</strong></td>
								</tr>
								<?php while (have_posts()): the_post(); ?>
									<?php $count++; ?>
									<tr>
										<td class="ctr"><?php echo $count; ?></td>
										<td><a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a></td>
										<td><?php echo get_post_meta($post->ID, '_nisn', true); ?></td>
										<td><?php $terms = get_the_terms($post->ID, 'status');
												if ($terms != null) {
													foreach ($terms as $term) {
														$term_link = get_term_link($term, 'status');
														echo '<strong>' . $term->name . '</strong>';
														unset($term);
													}
												}
												?></td>
									</tr>

								<?php endwhile; ?>
							</table>
						</div>
					</div>

				<?php } else { ?>

				<?php } ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>