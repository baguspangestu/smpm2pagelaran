<script>
  jQuery(document).ready(function($) {
    var owl = $('.gtkquote');
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
      dots: true,
      lazyLoad: true,
      autoplay: true,
      autoplayTimeout: 6000,
      autoplayHoverPause: true,
      margin: 0,
      video: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        800: {
          items: 2
        },
        1024: {
          items: 3
        }
      }
    });
  });
</script>

<section class="white clear">
  <div class="ext__container">
    <div class="secblock">

      <div class="pead clear">
        <div class="innpad clear">

          <!-- daftar gtk -->
          <div class="guruloop">
            <h3 class="fopen">
              <?php echo (get_option('gtgtk')) ? get_option('gtgtk') : 'Daftar GTK' ?>
            </h3>
            <div class="gtkquote owl-carousel owl-theme">
              <?php query_posts('post_type=gtk&showposts=12&orderby=rand'); ?>

              <?php if (have_posts()) { ?>
                <?php while (have_posts()): the_post(); ?>
                  <div class="gurus item clear">
                    <?php if (has_post_thumbnail()) { ?>
                      <a href="<?php the_permalink() ?>" class="grthumb"><?php the_post_thumbnail('photo', array(
                                                                            'alt' => trim(strip_tags($post->post_title)),
                                                                            'title' => trim(strip_tags($post->post_title)),
                                                                          )); ?>
                      </a>
                    <?php } else { ?>
                      <a href="#" class="grthumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                      </a>
                    <?php } ?>
                    <div class="ngurus">
                      <?php the_title(); ?>
                    </div>

                    <div class="nik"><?php echo get_post_meta($post->ID, '_jen', true); ?></div>

                  </div>
                <?php endwhile; ?>
              <?php } ?>

              <?php wp_reset_query(); ?>
            </div>
          </div>
          <!-- daftar gtk -->

        </div>
      </div>

    </div>
  </div>
</section>