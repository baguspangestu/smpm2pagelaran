	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Sidebar', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Heading Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdheadbg" id="sdheadbg" class="coloring" value="<?php echo get_option('sdheadbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Border Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdborbg" id="sdborbg" class="coloring" value="<?php echo get_option('sdborbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdtxco" id="sdtxco" class="coloring" value="<?php echo get_option('sdtxco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdlkco" id="sdlkco" class="coloring" value="<?php echo get_option('sdlkco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sddtbg" id="sddtbg" class="coloring" value="<?php echo get_option('sddtbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sddtco" id="sddtco" class="coloring" value="<?php echo get_option('sddtco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdmtbg" id="sdmtbg" class="coloring" value="<?php echo get_option('sdmtbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdmtco" id="sdmtco" class="coloring" value="<?php echo get_option('sdmtco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Time Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdtevbg" id="sdtevbg" class="coloring" value="<?php echo get_option('sdtevbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Time Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sdtevco" id="sdtevco" class="coloring" value="<?php echo get_option('sdtevco'); ?>"/> 
					</div>
		    	</div>
			</div>
		</td>
    </tr>