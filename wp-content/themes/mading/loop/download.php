
<?php if (have_posts()) { ?>
<div id="loop" class="list archives clear">
    <div class="oversis">
    <table class="siswa">
	    <tr>
		    <td class="ctr"><strong>Ikon</strong></td>
			<td><strong>Keterangan File</strong></td>
			<td class="ctr"><strong>Download</strong></td>
		</tr>
    	<?php while (have_posts()): the_post(); ?>
        
		<tr>
		    <td class="ctr">
			     <img src="<?php echo get_post_meta($post->ID, 'icon_file', true); ?>"/>
			</td>
	    	<td>
			     <strong><?php the_title(); ?></strong><br/>
				 <em>Type : <?php echo get_post_meta($post->ID, 'type_file', true); ?></em><br/>
				 <?php the_content(); ?>
			</td>
			<td class="ctr vmd"> <a href="<?php echo get_post_meta($post->ID, 'podcast_file', true); ?>">Download</a><br/>
			<em>(<?php echo get_post_meta($post->ID, 'size_file', true); ?>)</em></td>
		</tr>
		
		<?php endwhile; ?>
	</table>
    </div>
</div>

<?php } else { ?>

<?php } ?>