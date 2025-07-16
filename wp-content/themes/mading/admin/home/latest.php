	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Latest Post', 'mading'); ?></label>
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
				        <input type="text" name="lpbg" id="lpbg" class="coloring" value="<?php echo get_option('lpbg'); ?>"/> 
					</div>
		    	</div>
				
		        <div class="clear">
					<div class="quarter">
				        <label><?php _e('Info BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="inbg" id="inbg" class="coloring" value="<?php echo get_option('inbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="inco" id="inco" class="coloring" value="<?php echo get_option('inco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Overlay BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovinbg" id="ovinbg" class="coloring" value="<?php echo get_option('ovinbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="datinco" id="datinco" class="coloring" value="<?php echo get_option('datinco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Title Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="titinco" id="titinco" class="coloring" value="<?php echo get_option('titinco'); ?>"/> 
					</div>
		    	</div>
			</div>
		</td>
    </tr>
