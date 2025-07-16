<script>
  jQuery(document).ready(function($) {
    var owl = $('.slidequote');
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
      lazyLoad: true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      margin: 0,
      video: true,
      items: 1,
    });
  });
</script>

<section class="maquotes clear">
  <div class="overback">
    <div class="ext__container">
      <h4><?php echo (get_option('gtquotes')) ? get_option('gtquotes') : 'quotes' ?></h4>

      <div id="quotes-slider">
        <div id="qslider">
          <div id="qmask">

            <?php query_posts('post_type=quotes&showposts=5'); ?>

            <div class="slidequote owl-carousel owl-theme">

              <?php if (have_posts()) { ?>
                <?php while (have_posts()): the_post(); ?>
                  <div class="item">
                    <div class="post">
                      "...<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 25); ?>..." <em>-
                        oleh <strong><?php echo get_post_meta($post->ID, '_nama', true); ?></strong></em>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php } else { ?>
                <div class="item">
                  <div class="post">
                    "...Bagian ini digunakan untuk menampilkan 5 buah post Quotes, silahkan buat post Quotes di Dasbor >
                    Quotes / Motivasi..." <em>- oleh <strong>selfis</strong></em>
                  </div>
                </div>
              <?php } ?>

            </div>

            <?php wp_reset_query(); ?>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>