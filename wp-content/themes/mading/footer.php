</div>
<!-- Container -->

<div class="footbar clear">
	<div class="ext__container">

		<div class="foot-bar fleft">
			<div class="foot-inn">
				<?php if (dynamic_sidebar('Footbar Kiri')):
					$widget_args = array(
						'before_widget' => '<div id="%1$s" class="%2$s widget">',
						'after_widget' => '</div>',
						'before_title' => '<h3>',
						'after_title' => '</h3>'
					); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="foot-bar fcenter">
			<div class="foot-inn">
				<?php if (dynamic_sidebar('Footbar Tengah')):
					$widget_args = array(
						'before_widget' => '<div id="%1$s" class="%2$s widget">',
						'after_widget' => '</div>',
						'before_title' => '<h3>',
						'after_title' => '</h3>'
					); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="foot-bar fright">
			<div class="foot-inn">
				<?php if (dynamic_sidebar('Footbar Kanan')):
					$widget_args = array(
						'before_widget' => '<div id="%1$s" class="%2$s widget">',
						'after_widget' => '</div>',
						'before_title' => '<h3>',
						'after_title' => '</h3>'
					); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="footer clear">
	<div class="copyright">
		<?php if (get_option('footer')) { ?>
			<?php echo get_option('footer'); ?>
		<?php } else { ?>
			Copyright &copy; 2025 <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
			<span><?php _e('Didukung oleh', 'mading'); ?> <a href="http://wordpress.org">WordPress</a>.
				<?php _e('Tema Mading Mod oleh', 'mading'); ?> <a href="http://baguspangestu.com">Bagus Pangestu</a></span>
		<?php } ?>
	</div>
</div>
</div>
</div>

<?php wp_footer(); ?>

<!-- Back to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<script>
	// Scroll Top
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 450) {
			$('#return-to-top').fadeIn(200);
			$('.nav-inn').addClass("fade");
			$('.open').css("display", "none");
			$('.boxed .slideshow').css("bottom", "0");
			$('.boxed #slideshow, .boxed .slide').css("transform", "scale(1.2)");
		} else {
			$('#return-to-top').fadeOut(200);
			$('.open').css("display", "block");
			$('.nav-inn').removeClass("fade");
			$('.boxed .slideshow').css("bottom", "auto");
			$('.boxed #slideshow, .boxed .slide').css("transform", "scale(1.0)");
		}
	});
	$('#return-to-top').click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
	});
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js'></script>

</body>

</html>