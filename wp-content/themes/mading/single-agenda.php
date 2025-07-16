<?php get_header(); ?>

<section class="madinn pwhite clear">
	<div class="ext__container">

		<div class="content">
			<div class="madings">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<?php
						global $post;
						$lokasi = get_post_meta($post->ID, '_lokasi', true);
						$tevent = get_post_meta($post->ID, '_tevent', true);
						$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
						$jam = get_post_meta($post->ID, '_jam', true);
						$today = strtotime(date_i18n('d-m-Y H:i'));
						$end = get_post_meta($post->ID, '_tevent', true) . ' ' . get_post_meta($post->ID, '_jam', true);
						$exp = strtotime(date_i18n($end));
						$sisa = $exp - $today;
						?>

						<div <?php post_class('single agendas clear'); ?> id="post_<?php the_ID(); ?>">

							<div class="podate">
								<i class="ag fa fa-calendar"></i>

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
									<div class="imagen">
										<?php if (has_post_thumbnail()) {
											echo '' . get_the_post_thumbnail(
												$post->ID,
												'full',
												array(
													'alt' => trim(strip_tags($post->post_title)),
													'title' => trim(strip_tags($post->post_title)),
												)
											);
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/agenda.jpg" />
										<?php } ?>

										<div class="cogen">
											<div class="agloop clear">
												<div class="age-info">
													<span class="agedate"><?php echo date_i18n("j", strtotime($tevent)); ?></span>
													<span class="agemon"><?php echo date_i18n("F", strtotime($tevent)); ?></span>
												</div>
												<div class="atime">
													<div class="wakt">waktu : <?php echo $jam; ?></div>
													<div class="titloc">
														AGENDA : <?php the_title(); ?>
														<br />
														<span><em>LOKASI : <?php echo get_post_meta($post->ID, '_lokasi', true); ?></em></span>
													</div>
												</div>
											</div>

											<?php if ($sisa > 0) { ?>
												<div id="clockdiv">
													<div class="unday">
														<div class="days"></div>
														<span class="tebo">HARI</span>
													</div>
													<div class="unhour">
														<div class="hours"></div>
														<span class="tebo">JAM</span>
													</div>
													<div class="unminute">
														<div class="minutes"></div>
														<span class="tebo">MENIT</span>
													</div>
													<div class="unsecond">
														<div class="seconds"></div>
														<span class="tebo">DETIK</span>
													</div>
												</div>
											<?php } else { ?>
												<div id="clockdiv">
													<div class="expired">Maaf, Acara telah lewat</div>
												</div>
											<?php } ?>
										</div>

										<div class="bcovlay">
										</div>
									</div>




									<?php the_content(); ?>
								</div>

								<script>
									function getTimeRemaining(endtime) {
										var t = Date.parse(endtime) - Date.parse(new Date());
										var seconds = Math.floor((t / 1000) % 60);
										var minutes = Math.floor((t / 1000 / 60) % 60);
										var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
										var days = Math.floor(t / (1000 * 60 * 60 * 24));
										return {
											'total': t,
											'days': days,
											'hours': hours,
											'minutes': minutes,
											'seconds': seconds
										};
									}

									function initializeClock(id, endtime) {
										var clock = document.getElementById(id);
										var daysSpan = clock.querySelector('.days');
										var hoursSpan = clock.querySelector('.hours');
										var minutesSpan = clock.querySelector('.minutes');
										var secondsSpan = clock.querySelector('.seconds');

										function updateClock() {
											var t = getTimeRemaining(endtime);

											daysSpan.innerHTML = t.days;
											hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
											minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
											secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

											if (t.total <= 0) {
												clearInterval(timeinterval);
											}
										}

										updateClock();
										var timeinterval = setInterval(updateClock, 1000);
									}

									var deadline = '<?php echo date("F j Y", strtotime($tevent)); ?> <?php echo $jam; ?> UTC+0700';
									initializeClock('clockdiv', deadline);
								</script>

							</div>

						</div>

					<?php endwhile; ?>
				<?php endif; ?>

				<?php comments_template(); ?>
			</div>



		</div>

		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>