	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Footer Sidebar', 'mading'); ?></label>
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
				        <input type="text" name="footbg" id="footbg" class="coloring" value="<?php echo get_option('footbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Heading Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdheadbg" id="fosdheadbg" class="coloring" value="<?php echo get_option('fosdheadbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Border Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdborbg" id="fosdborbg" class="coloring" value="<?php echo get_option('fosdborbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="footbartco" id="footbartco" class="coloring" value="<?php echo get_option('footbartco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="footbarlkco" id="footbarlkco" class="coloring" value="<?php echo get_option('footbarlkco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosddtbg" id="fosddtbg" class="coloring" value="<?php echo get_option('fosddtbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosddtco" id="fosddtco" class="coloring" value="<?php echo get_option('fosddtco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdmtbg" id="fosdmtbg" class="coloring" value="<?php echo get_option('fosdmtbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdmtco" id="fosdmtco" class="coloring" value="<?php echo get_option('fosdmtco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Time Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdtevbg" id="fosdtevbg" class="coloring" value="<?php echo get_option('fosdtevbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Time Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fosdtevco" id="fosdtevco" class="coloring" value="<?php echo get_option('fosdtevco'); ?>"/> 
					</div>
		    	</div>
			</div>
		</td>
    </tr>