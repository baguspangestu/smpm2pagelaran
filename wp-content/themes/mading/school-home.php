<?php
get_header(); ?>

<!-- Content -->

<?php get_template_part('homepage/home-top'); ?>
<?php get_template_part('homepage/home-four'); ?>
<?php get_template_part('homepage/home-event'); ?>
<?php get_template_part('homepage/home-gallery'); ?>
<?php get_template_part('homepage/home-quotes'); ?>
<?php get_template_part('homepage/home-gtk'); ?>
<?php get_template_part('homepage/home-video'); ?>

<?php $gomaps = get_option('gomaps');
switch ($gomaps) {
	case "on": ?>
		<section class="dmaps clear">
			<div id="googleMap"></div>
		</section>
	<?php break;
	case "off":
		echo '';
		break;
	default: ?>
		<section class="dmaps clear">
			<div id="googleMap"></div>
		</section>
<?php } ?>

<?php get_footer(); ?>