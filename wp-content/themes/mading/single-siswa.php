<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
							<div class="post-meta">
								<h1 class="alwnor"><?php the_title(); ?></h1>
							</div>
							<div class="post-content">
								<?php if (has_post_thumbnail()) echo '<div class="madingthumb edit">' . get_the_post_thumbnail(
									$post->ID,
									'photo',
									array(
										'alt' => trim(strip_tags($post->post_title)),
										'title' => trim(strip_tags($post->post_title)),
									)
								) . '</div>'; ?>

								<table class="gtk">
									<tr>
										<td class="tlf">Status</td>
										<td>: <?php $terms = get_the_terms($post->ID, 'status');
													if ($terms != null) {
														foreach ($terms as $term) {
															$term_link = get_term_link($term, 'status');
															echo '<a href="' . $term_link . '">' . $term->name . '</a>';
															unset($term);
														}
													}
													?>
										</td>
									</tr>
									<tr>
										<td class="tlf">NISN</td>
										<td>: <?php echo get_post_meta($post->ID, '_nisn', true); ?></td>
									</tr>
									<tr>
										<td class="tlf">Jenis Kelamin</td>
										<td>: <?php echo get_post_meta($post->ID, '_sex', true); ?></td>
									</tr>
									<tr>
										<td class="tlf">T.T.L</td>
										<td>: <?php echo get_post_meta($post->ID, '_ttl', true); ?></td>
									</tr>
									<tr>
										<td class="tlf">Agama</td>
										<td>: <?php echo get_post_meta($post->ID, '_rel', true); ?></td>
									</tr>
									<tr>
										<td class="tlf">Mulai Masuk</td>
										<td>: <?php echo get_post_meta($post->ID, '_mas', true); ?></td>
									</tr>
								</table>

								Alamat : <?php echo get_post_meta($post->ID, '_add', true); ?><br />
								<table class="sos">
									<tr>
										<td class="tlf"><i class="fa fa-phone"></i></td>
										<td><strong><?php echo get_post_meta($post->ID, '_telp', true); ?></strong></td>
									</tr>
								</table>

							</div>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>