<section class="white clear" id="aleft">
	<!-- Block Galeri Photo -->
	<div class="galeria clear">
	    <div class="eightgal clear">
			<?php query_posts('post_type=galeri&showposts=8'); ?>
				
				<?php if (have_posts()) { ?>
					<?php while (have_posts()): the_post(); ?>
						<div class="eight">
							<div class="eiginn">
						    	<?php if (has_post_thumbnail()) { ?>
						        		<?php the_post_thumbnail('news', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?>
							    <?php } ?>
								<div class="ovlay">
								</div>
								<div class="jamz"><?php echo get_the_time('j M Y'); ?></div>
								<div class="gspan"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
							</div>
						</div>		
					<?php endwhile; ?>
				<?php } else { ?>
				<?php } ?>
					
			<?php wp_reset_query(); ?>
		</div>
	</div>
    <!-- Block Galeri Photo -->
</section>
