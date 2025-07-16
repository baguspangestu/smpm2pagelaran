<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<div <?php post_class('single tops kfep clear'); ?> id="post_<?php the_ID(); ?>">

							<!-- left side -->
							<div class="podate">
								<i class="fep fa fa-star-o"></i>
							</div>
							<div class="rside">
								<div class="post-meta">
									<h1 class="alwnor"><?php the_title(); ?></h1>
								</div>
							</div>

						</div>

						<div class="single sing kfep clear">
							<div class="podate">
								<div class="share">
									<span>BAGIKAN</span><br />
									<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>"
										target="_blank" title="<?php _e('Share ke Facebook', 'mading'); ?>"><i
											class="fa fa-brands fa-facebook-f"></i></a>
									<a href="http://x.com/home?status=<?php the_permalink() ?> , <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>"
										target="_blank" title="<?php _e('Share ke X', 'mading'); ?>"><i
											class="fa fa-brands fa-x-twitter"></i></a>
									<a href="whatsapp://send?text=<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?> cek lengkap di <?php the_permalink() ?>"
										title="<?php _e('Share ke Whatsapp', 'mading'); ?>"><i class="fa fa-brands fa-whatsapp"></i></a>
									<a href="https://t.me/share/url?url=<?php the_permalink() ?>" target="_blank"
										title="<?php _e('Share ke Telegram', 'mading'); ?>"><i class="fa fa-brands fa-telegram"></i></a>
								</div>
							</div>
							<!-- left side -->

							<!-- right side -->
							<div class="rside">
								<div class="post-content">
									<?php if (has_post_thumbnail()) echo '<div class="post-img">' . get_the_post_thumbnail(
										$post->ID,
										'full',
										array(
											'alt' => trim(strip_tags($post->post_title)),
											'title' => trim(strip_tags($post->post_title)),
										)
									) . '</div>';
									?>

									<?php the_content(); ?>

								</div>
							</div>
							<!-- right side -->

						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>