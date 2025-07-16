<section class="parallax dealpar clear">
	<div class="dealay">
	</div>

	<div class="overage">
		<h4><?php echo (get_option('gtakaagenda')) ? get_option('gtakaagenda') : 'Agenda Terbaru' ?></h4>
		<!-- agenda -->

		<?php
		$today = strtotime(date('d-m-Y'));
		query_posts(
			array(
				'post_type' => 'agenda',
				'posts_per_page' => 1,
				'meta_key' => '_minus',
				'meta_query' => array(
					array(
						'key' => '_minus',
						'value' => $today,
						'compare' => '>='
					)
				),
				'orderby' => 'meta_value',
				'order' => 'ASC'
			)
		); ?>

		<?php if (have_posts()) { ?>
			<?php while (have_posts()): the_post(); ?>
				<?php
				global $post;
				$tevent = get_post_meta($post->ID, '_tevent', true);
				$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
				$jam = get_post_meta($post->ID, '_jam', true);
				$today = strtotime(date_i18n('d-m-Y H:i'));
				$end = get_post_meta($post->ID, '_tevent', true) . ' ' . get_post_meta($post->ID, '_jam', true);
				$exp = strtotime(date_i18n($end));
				$sisa = $exp - $today;
				?>
				<div class="agloop clear">
					<div class="age-info">
						<span class="agedate"><?php echo date_i18n('d', strtotime($tevent)); ?></span>
						<span class="agemon"><?php echo date_i18n('F', strtotime($tevent)); ?></span>
					</div>
					<div class="atime">
						<div class="wakt">waktu : <?php echo get_post_meta($post->ID, '_jam', true); ?></div>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<div class="evnt">
							<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 24); ?>
						</div>
					</div>

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

						var deadline =
							'<?php echo date("F j Y", strtotime($tevent)); ?> <?php echo get_post_meta($post->ID, '_jam', true); ?> UTC+0700';
						initializeClock('clockdiv', deadline);
					</script>

				</div>

			<?php endwhile; ?>
		<?php } else { ?>
			<div class="agloop clear">
				<div class="age-info">
				</div>
				<div class="atime">
					<h3>Tidak ada Agenda baru saat ini</h3>
				</div>
			</div>
		<?php } ?>

		<?php wp_reset_query(); ?>

		<!-- agenda -->
	</div>
</section>