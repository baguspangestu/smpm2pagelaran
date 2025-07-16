<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
  <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php if (is_single()) { ?>
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id, 'landscape', true);
        ?>
        <meta property="og:image" content="
		<?php if (has_post_thumbnail()) {
          echo $thumb_url[0];
        } ?>" />
      <?php endwhile; ?>
    <?php endif; ?>
  <?php } else { ?>
    <meta property="og:image"
      content="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() . '/images/logo.png' ?>" />
  <?php } ?>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php if (get_option('favicon')) { ?>
    <link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon" />
  <?php } else { ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" type="image/x-icon" />
  <?php } ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/newstickers.js"></script>
  <?php wp_head(); ?>

  <script>
    $(function() {
      $("ul#mading-ticker").liScroll();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('ul').accordion();
    });
  </script>

  <script type="text/javascript">
    $("document").ready(function($) {
      $(".mob").slideUp();
      $(".full").hide();
      $(".fmenu").click(function() {
        $(".mob").slideToggle();
      });
      $(".fsearch").click(function() {
        $(".masearch").slideToggle();
      });

      $(".opens").mouseenter(function() {
        $(".layout, .styling, .mmenu").css("left", "0");
        $(".opens").hide();
        $(".closes").show();
      });

      $(".fa-cog").click(function() {
        $(".layout, .styling, .mmenu").css("left", "0");
        $(".styling").css("left", "0");
        $(".opens").hide();
        $(".closes").show();
      });

      $(".closes").click(function() {
        $(".layout, .styling, .mmenu").css("left", "-75px");
        $(".styling").css("left", "-75px");
        $(".opens").show();
        $(".closes").hide();
      });

      $(".box").click(function() {
        $(".mading").removeClass("noboxed").addClass("boxed");
        $(".full").show();
        $(".box").hide();
      });
      $(".full").click(function() {
        $(".mading").removeClass("boxed").addClass("noboxed");
        $(".box").show();
        $(".full").hide();
      });
      $(".mfix").click(function() {
        $(".mading").removeClass("nofixed").addClass("fixed");
        $(".scroll").show();
        $(".mfix").hide();
      });
      $(".scroll").click(function() {
        $(".mading").removeClass("fixed").addClass("nofixed");
        $(".mfix").show();
        $(".scroll").hide();
      });

    });
  </script>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo (get_option('apikey')) ? get_option('apikey') . '' : '' ?>"
    type="text/javascript"></script>

  <script>
    var myCenter = new google.maps.LatLng(
      <?php echo (get_option('maps')) ? get_option('maps') . '' : '-5.932330,105.992419' ?>);

    function initMap() {
      var mapProp = {
        center: myCenter,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
      var marker = new google.maps.Marker({
        position: myCenter,
        title: 'Click to zoom',
        icon: '<?php echo (get_option('mmaps')) ? get_option('mmaps') : get_template_directory_uri() . '/images/maps.png' ?>'
      });

      marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initMap);
  </script>

  <?php get_template_part('admin/mad-color'); ?>

  <!-- Tema MADING dari ciuss.com - Rilis 31 Juli 2017 -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/all.min.css">
</head>

<body <?php body_class(); ?>>
  <div
    class="mading <?php echo (get_option('fixed')) ? get_option('fixed') . '' : 'nofixed' ?> <?php echo (get_option('boxed')) ? get_option('boxed') . '' : 'noboxed' ?>">


    <div class="wrapper">

      <div class="mob <?php echo (get_option('fixed')) ? get_option('fixed') . '' : 'nofixed' ?>">
        <?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'mobi', 'menu_class' => 'accordion', 'menu_id' => 'acc', 'fallback_cb' => false)); ?>
      </div>

      <!-- NAVIGASI TEMA MADING -->
      <div class="nav-mading <?php echo (get_option('fixed')) ? get_option('fixed') . '' : 'nofixed' ?>">
        <div class="nav-inn clear">

          <div class="open <?php echo (get_option('fixed')) ? get_option('fixed') . '' : 'nofixed' ?>">
            <span class="oleft">
              <div class="openarr"><i class=" fa fa-phone"></i> <span class="h800"> </span></div>
              <?php echo (get_option('telepon')) ? get_option('telepon') . '' : '0838-1525-1385' ?>
            </span><span class="oleft">
              <div class="openarr"><i class=" fa fa-envelope"></i> <span class="h800"> </span></div>
              <?php echo (get_option('email')) ? get_option('email') . '' : 'yayun@ciuss.com' ?>
            </span> <span class="oleft" id="hours">
              <div class="openarr"><i class="fa-solid fa-clock"></i> <span class="h800"> </span></div> <span
                id="time"></span>:<span id="minu"></span>:<span id="secs"></span>
            </span>
          </div>



          <div class="ext__container">
            <div class="inn">
              <div class="logo">
                <a href="<?php echo home_url(); ?>"><img id="logo"
                    src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() . '/images/logo.png' ?>"
                    alt="<?php bloginfo('name'); ?>" /></a>
              </div>
              <?php wp_nav_menu(array('theme_location' => 'navigation', 'container' => 'div', 'container_class' => 'nav', 'menu_class' => 'dd', 'menu_id' => 'dd', 'fallback_cb' => false)); ?>
              <div class="masearch">
                <?php get_search_form(); ?>
              </div>
              <i class="fsearch fa fa-search"></i>
              <i class="fmenu fa fa-navicon"></i>
            </div>

          </div>
        </div>
      </div>
      <!-- NAVIGASI TEMA MADING -->

      <?php if (is_front_page()) {
        echo '<div id="ndeslide">';
        get_template_part('slider');
        echo '</div>';
      } ?>

      <!-- AFTER SLIDER MADING -->
      <?php if (is_front_page()) {
      ?>
        <div class="maschol clear">
          <div class="ext__container">
            <div class="scname">
              <h2><?php echo (get_option('sekolah')) ? get_option('sekolah') . '' : 'Bagus Pangestu' ?></h2>
            </div>
            <div class="massos">
              <div class="kontak">
                <?php if (get_option('facebook')) { ?>
                  <a href="<?php echo (get_option('facebook')) ? get_option('facebook') . '' : '' ?>" target="_blank">
                    <i class="fa fa-brands fa-facebook-f"></i>
                  </a>
                <?php } ?>
                <?php if (get_option('google')) { ?>
                  <a href="<?php echo (get_option('google')) ? get_option('google') . '' : '' ?>" target="_blank">
                    <i class="fa fa-brands fa-instagram"></i>
                  </a>
                <?php } ?>
                <?php if (get_option('twitter')) { ?>
                  <a href="<?php echo (get_option('twitter')) ? get_option('twitter') . '' : '' ?>" target="_blank">
                    <i class="fa fa-brands fa-x-twitter"></i>
                  </a>
                <?php } ?>
                <?php if (get_option('youtube')) { ?>
                  <a href="<?php echo (get_option('youtube')) ? get_option('youtube') . '' : '' ?>" target="_blank">
                    <i class="fa fa-brands fa-youtube"></i>
                  </a>
                <?php } ?>
                <?php if (get_option('email')) { ?>
                  <a href="mailto:<?php echo (get_option('email')) ? get_option('email') . '' : '' ?>" target="_blank">
                    <i class="fa fa-envelope"></i>
                  </a>
                <?php } ?>
                <!-- <a href="<?php echo home_url(); ?>/feed/" target="_blank">
                <i class="fa fa-feed"></i>
              </a> -->
              </div>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="breaks clear">
        </div>
      <?php } ?>

      <!-- AFTER SLIDER MADING -->
      <div class="madticker">
        <div class="ext__container">
          <div id="infotit">
            Info Sekolah
          </div>
          <!-- <div class="infotim">
            <div class="ticker-title"><i class="fa fa-angle-left"></i> <?php echo date_i18n('d-m-Y', time()); ?></div>
          </div> -->

          <div class="mask">
            <?php query_posts('post_type=sekilas-info&showposts=3'); ?>
            <?php if (have_posts()) { ?>
              <ul id="mading-ticker" class="newstickers">
                <?php while (have_posts()): the_post(); ?>
                  <li>
                    <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php } else { ?>
              <ul id="mading-ticker" class="newstickers">
                <li>Untuk menambahkan running text silahkan ke Dashboard > Sekilas Info
                </li>
              </ul>
            <?php } ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div>

      <?php if (function_exists('dimox_breadcrumbs')) {
        dimox_breadcrumbs();
      }      ?>

      <!-- Container -->
      <div id="container" class="clear">