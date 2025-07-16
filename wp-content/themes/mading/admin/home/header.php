
	
	
	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Header', 'mading'); ?></label>
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
				        <input type="text" name="headbg" id="headbg" class="coloring" value="<?php echo get_option('headbg'); ?>"/> 
					</div>
					<div class="quarter">
					     <label><?php _e('Opacity', 'mading'); ?></label>
					</div>
					<div class="quarter">
					    <input name="opheadbg" style="width: 100%;" type="range" min="0" max="1" step="0.05" value="<?php echo (get_option('opheadbg')) ? get_option('opheadbg') : '1' ?>" data-orientation="vertical" />
				    </div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Menu Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="menuco" id="menuco" class="coloring" value="<?php echo get_option('menuco'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Sub Menu BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="smbg" id="smbg" class="coloring" value="<?php echo get_option('smbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Hover BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="smbgho" id="smbgho" class="coloring" value="<?php echo get_option('smbgho'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Sub Menu Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="smco" id="smco" class="coloring" value="<?php echo get_option('smco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Hover Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="smcoho" id="smcoho" class="coloring" value="<?php echo get_option('smcoho'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Icon BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="headicobg" id="headicobg" class="coloring" value="<?php echo get_option('headicobg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Icon Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="headicoco" id="headicoco" class="coloring" value="<?php echo get_option('headicoco'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
	</tr>
