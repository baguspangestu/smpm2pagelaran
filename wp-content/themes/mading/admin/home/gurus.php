	<tr valign="top">
        <td class="tl">
		    <label><?php _e('GTK / Dosen', 'mading'); ?></label>
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
				        <input type="text" name="gurusbg" id="gurusbg" class="coloring" value="<?php echo get_option('gurusbg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Heading Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="guheadco" id="guheadco" class="coloring" value="<?php echo get_option('guheadco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Aksen Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="guakco" id="guakco" class="coloring" value="<?php echo get_option('guakco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="guteco" id="guteco" class="coloring" value="<?php echo get_option('guteco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Name BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gunabg" id="gunabg" class="coloring" value="<?php echo get_option('gunabg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Name Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gunaco" id="gunaco" class="coloring" value="<?php echo get_option('gunaco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Photo BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="guphobg" id="guphobg" class="coloring" value="<?php echo get_option('guphobg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Shadow Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="gushabg" id="gushabg" class="coloring" value="<?php echo get_option('gushabg'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>
