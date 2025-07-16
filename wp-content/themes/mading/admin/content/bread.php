	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Breadcrumb', 'mading'); ?></label>
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
				        <input type="text" name="brdbg" id="brdbg" class="coloring" value="<?php echo get_option('brdbg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="brdlico" id="brdlico" class="coloring" value="<?php echo get_option('brdlico'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="brdco" id="brdco" class="coloring" value="<?php echo get_option('brdco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>