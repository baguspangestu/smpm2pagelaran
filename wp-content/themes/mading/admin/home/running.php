	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Running Text', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Background', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sekinbg" id="sekinbg" class="coloring" value="<?php echo get_option('sekinbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sekinco" id="sekinco" class="coloring" value="<?php echo get_option('sekinco'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Arrow BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sekarbg" id="sekarbg" class="coloring" value="<?php echo get_option('sekarbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sekarco" id="sekarco" class="coloring" value="<?php echo get_option('sekarco'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
    </tr>
