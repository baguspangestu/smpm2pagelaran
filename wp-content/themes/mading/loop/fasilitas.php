<?php if (have_posts()): ?>

<div id="loop" class="list clear">

  <?php while (have_posts()): the_post(); ?>
  <div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">

    <!-- left side -->
    <div class="podate">
      <i class="fa fa-solid fa-star ico"></i>
    </div>
    <!-- left side -->

    <!-- right side -->
    <div class="rside">
      <?php if (has_post_thumbnail()): ?>
      <div class="imgloop">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('news', array(
																										'alt' => trim(strip_tags($post->post_title)),
																										'title' => trim(strip_tags($post->post_title)),
																									)); ?></a>
      </div>
      <?php endif; ?>

      <h2>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </h2>

      <div class="post-content">
        <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 60); ?>
      </div>
    </div>
    <!-- right side -->

  </div>
  <?php endwhile; ?>

</div>

<?php endif; ?>