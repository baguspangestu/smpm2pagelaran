<section class="white clear" id="aleft">
	<div class="ext__container">

		<div class="guruloop">
			<h3 class="fopen">
				Video
			</h3>

			<div class="pead clear">
				<div class="innpad clear">
					<?php query_posts('post_type=video&showposts=4'); ?>

					<?php if (have_posts()) { ?>
						<?php while (have_posts()): the_post(); ?>
							<div class="peaduo hleft" style="text-align: center;">
								<iframe class="akframe" style="width: 98%;height: 200px;"
									src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>"
									frameborder="0" allowfullscreen></iframe>
							</div>
						<?php endwhile; ?>
						<?php } else { ?>j
					<?php } ?>

					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Block Galeri Photo -->
</section>