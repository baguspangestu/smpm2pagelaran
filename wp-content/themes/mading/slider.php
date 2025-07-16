<script>
jQuery(document).ready(function($) {
  var owl = $('.bigslide');
  owl.on('initialize.owl.carousel initialized.owl.carousel ' +
    'initialize.owl.carousel initialize.owl.carousel ' +
    'resize.owl.carousel resized.owl.carousel ' +
    'refresh.owl.carousel refreshed.owl.carousel ' +
    'update.owl.carousel updated.owl.carousel ' +
    'drag.owl.carousel dragged.owl.carousel ' +
    'translate.owl.carousel translated.owl.carousel ' +
    'to.owl.carousel changed.owl.carousel',
    function(e) {
      $('.' + e.type)
        .removeClass('secondary')
        .addClass('success');
      window.setTimeout(function() {
        $('.' + e.type)
          .removeClass('success')
          .addClass('secondary');
      }, 1500);
    });
  owl.owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    lazyLoad: false,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    margin: 0,
    video: true,
    items: 1,
  });
});
</script>
<?php query_posts('post_type=slider&showposts=5'); ?>

<div class="slideshow">

  <!-- SLIDER SEKOLAH -->
  <div class="bigslide owl-carousel owl-theme">

    <?php if (have_posts()) { ?>
    <?php while (have_posts()): the_post(); ?>
    <div class="item">
      <div class="post">
        <?php if (has_post_thumbnail()) echo '' . get_the_post_thumbnail(
              $post->ID,
              'slider',
              array(
                'alt' => trim(strip_tags($post->post_title)),
              )
            ) . '';
            ?>
      </div>
    </div>
    <?php endwhile; ?>
    <?php } else { ?>
    <div class="item">
      <div class="post">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slide.jpg" />
      </div>
    </div>
    <?php } ?>

  </div>
  <!-- SLIDER SEKOLAH -->

  <div class="sloverlay">

  </div>

</div>

<?php wp_reset_query(); ?>