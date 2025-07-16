<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$today = strtotime(date('d-m-Y'));
	query_posts( array( 
		'post_type' => 'agenda', 
		'paged' => $paged, 
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
	); 

    if (have_posts()): ?>

    <div id="loop" class="list archives clear">

	<?php while (have_posts()): the_post(); 
	    global $post;
			$tevent = get_post_meta($post->ID, '_tevent', true);
			$jam = get_post_meta($post->ID, '_jam', true);
			$lokasi = get_post_meta($post->ID, '_lokasi', true);?>
			
	    	<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">
		    	
				<!-- left side -->
				<div class="podate">
					<i class="fa fa-calendar jag"></i>
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
					
					<div class="adate">
	    	        	<?php echo $jam; ?> - <?php echo date_i18n("j F Y", strtotime($tevent)); ?><br/><br/>
			        	<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 30); ?>
		        	</div>
	        	</div>
				<!-- right side -->
				
            </div>
	<?php endwhile; ?>

</div>

   <?php endif; ?>
   
   <?php wp_reset_query(); ?>
