	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Gallery', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Section BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gallbg" id="gallbg" class="coloring" value="<?php echo get_option('gallbg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Overlay BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovgallbg" id="ovgallbg" class="coloring" value="<?php echo get_option('ovgallbg'); ?>"/> 
					</div>
					<div class="quarter">
					     <label><?php _e('Opacity', 'mading'); ?></label>
					</div>
					<div class="quarter">
					    <input name="gallbgop" style="width: 100%;" type="range" min="0" max="1" step="0.05" value="<?php echo (get_option('gallbgop')) ? get_option('gallbgop') : '1' ?>" data-orientation="vertical" />
				    </div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gallco" id="gallco" class="coloring" value="<?php echo get_option('gallco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Aksen Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gallak" id="gallak" class="coloring" value="<?php echo get_option('gallak'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>
