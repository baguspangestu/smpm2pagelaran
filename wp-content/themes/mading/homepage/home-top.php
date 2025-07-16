<section class="white clear">
	<div class="ext__container">
		<div class="hcontent">

			<!-- Block Artikel Terbaru -->
			<div class="mabaru clear">
				<div class="barulev">
					<div class="abspan"><?php echo (get_option('gtakabaru')) ? get_option('gtakabaru') : 'berita terbaru' ?></div>
					<?php query_posts('post_type=post&showposts=4'); ?>

					<?php if (have_posts()) { ?>
						<?php $count = 0; ?>
						<?php while (have_posts()): the_post(); ?>
							<?php $count++; ?>
							<?php if ($count == 1) { ?>
								<div class="singlev">
									<!-- first post -->
									<div class="singcoim">
										<?php if (has_post_thumbnail()) { ?>
											<div class="singbig"><?php the_post_thumbnail('news', array(
																							'alt' => trim(strip_tags($post->post_title)),
																							'title' => trim(strip_tags($post->post_title)),
																						)); ?>

											</div>
										<?php } else { ?>
											<div class="singbig">
												<img src="<?php echo get_template_directory_uri(); ?>/images/akathumb.jpg" />
											</div>
										<?php } ?>
										<div class="coverlay">
											<span><i class="fa-solid fa-calendar"></i> <?php echo get_the_time('l, j M Y'); ?></span>
											<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
										</div>
										<div class="ccovlay">
										</div>
									</div>
									<!-- first post -->
								</div>
				</div>
				<!-- 2nd - 4rd post -->
				<div class="barurg">
				<?php } elseif ($count == 2) { ?>
					<div class="secoim clear">
						<?php if (has_post_thumbnail()) { ?>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news', array(
																										'alt' => trim(strip_tags($post->post_title)),
																										'title' => trim(strip_tags($post->post_title)),
																									)); ?>
							</a>
						<?php } else { ?>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
							</a>
						<?php } ?>
						<div class="seccon">
							<span><i class="fa-solid fa-calendar"></i> <?php echo get_the_time('l, j M Y'); ?></span>
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="ccovlay">
						</div>
					</div>
				<?php } else { ?>
					<div class="twolas">
						<div class="twolas-rl">
							<?php if (has_post_thumbnail()) { ?>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news', array(
																											'alt' => trim(strip_tags($post->post_title)),
																											'title' => trim(strip_tags($post->post_title)),
																										)); ?>
								</a>
							<?php } else { ?>
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
								</a>
							<?php } ?>
							<div class="twocon">
								<span><i class="fa-solid fa-calendar"></i> <?php echo get_the_time('l, j M Y'); ?></span>
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							</div>
							<div class="ccovlay">
							</div>
						</div>

					</div>
				<?php } ?>
			<?php endwhile; ?>
		<?php } else { ?>
			<div class="singlev">
				<div class="singcoim">
					<div class="singbig">
						<img src="<?php echo get_template_directory_uri(); ?>/images/akathumb.jpg" />
					</div>
					<div class="coverlay">
						<span><i class="fa-solid fa-calendar"></i> Selasa, 11 Jul 2017</span>
						<h3><a href="#">Wuaedam Nonmelius Buam Veteres, Kuaedam Relicta.</a></h3>
					</div>
					<div class="ccovlay">
					</div>
				</div>
			</div>
				</div>

				<!-- 2nd - 4rd post -->
				<div class="barurg">

					<div class="secoim clear">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/akathumb.jpg" />
						</a>
						<div class="seccon">
							<span><i class="fa-solid fa-calendar"></i> Selasa, 11 Jul 2017</span>
							<h3><a href="#">Quia Dolori Non Voluptas Contrariaest, Sedoloris</a></h3>
						</div>
						<div class="ccovlay">
						</div>
					</div>

					<div class="twolas">
						<div class="twolas-rl">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/akathumb.jpg" />
							</a>
							<div class="twocon">
								<span><i class="fa-solid fa-calendar"></i> Selasa, 11 Jul 2017</span>
								<h3><a href="#">Linquit Dossi Placet. Quisenim Videatour Commose</a></h3>
							</div>
							<div class="ccovlay">
							</div>
						</div>
					</div>

					<div class="twolas">
						<div class="twolas-rl">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/akathumb.jpg" />
							</a>
							<div class="twocon">
								<span><i class="fa-solid fa-calendar"></i> Selasa, 11 Jul 2017</span>
								<h3><a href="#">Quaest Moderatio Cupiditatum Rationi Oboediens</a></h3>
							</div>
							<div class="ccovlay">
							</div>
						</div>
					</div>
					<!-- 2nd - 4rd post -->
				<?php } ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
			<!-- Block Artikel Terbaru -->

		</div>
		<div class="rcon">
			<div class="rconbg">
				<div class="editoz">
					<div class="edspan"><?php echo (get_option('gtakaedit')) ? get_option('gtakaedit') : 'editorial' ?></div>
					<?php query_posts('post_type=editorial&showposts=1'); ?>
					<?php if (have_posts()) { ?>
						<?php while (have_posts()): the_post(); ?>

							<?php if (has_post_thumbnail()) { ?>
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail('photo', array(
										'alt' => trim(strip_tags($post->post_title)),
										'title' => trim(strip_tags($post->post_title)),
									)); ?>
								</a>
							<?php } else { ?>
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
								</a>
							<?php } ?>
						<?php endwhile; ?>
					<?php } ?>
					<?php wp_reset_query(); ?>

					<?php query_posts('post_type=editorial&showposts=4'); ?>
					<?php if (have_posts()) { ?>
						<?php while (have_posts()): the_post(); ?>
							<div class="corner">
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?>...</a></h3>
							</div>
						<?php endwhile; ?>
					<?php } ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="edbot"><a href="<?php echo home_url('/editorial/'); ?>">Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
</section>