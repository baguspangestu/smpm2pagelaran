	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Footer', 'mading'); ?></label>
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
				        <input type="text" name="footerbg" id="footerbg" class="coloring" value="<?php echo get_option('footerbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ftexco" id="ftexco" class="coloring" value="<?php echo get_option('ftexco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="flinkco" id="flinkco" class="coloring" value="<?php echo get_option('flinkco'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdtxco" id="fosdtxco" class="coloring" value="<?php echo get_option('fosdtxco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdlkco" id="fosdlkco" class="coloring" value="<?php echo get_option('fosdlkco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('To Top BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="totopbg" id="totopbg" class="coloring" value="<?php echo get_option('totopbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('To Top Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="totopco" id="totopco" class="coloring" value="<?php echo get_option('totopco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>