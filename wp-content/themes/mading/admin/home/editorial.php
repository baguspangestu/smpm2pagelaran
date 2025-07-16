	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Editorial Post', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Info BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="edbg" id="edbg" class="coloring" value="<?php echo get_option('edbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="edco" id="edco" class="coloring" value="<?php echo get_option('edco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Background', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="editbg" id="editbg" class="coloring" value="<?php echo get_option('editbg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="editco" id="editco" class="coloring" value="<?php echo get_option('editco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Aksen Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="editakco" id="editakco" class="coloring" value="<?php echo get_option('editakco'); ?>"/> 
					</div>
		    	</div>
			</div>
		</td>
    </tr>
