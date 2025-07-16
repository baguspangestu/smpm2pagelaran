	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Quotes', 'mading'); ?></label>
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
				        <input type="text" name="quotebg" id="quotebg" class="coloring" value="<?php echo get_option('quotebg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Heading Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="quheadco" id="quheadco" class="coloring" value="<?php echo get_option('quheadco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="quteco" id="quteco" class="coloring" value="<?php echo get_option('quteco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Name Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="qunaco" id="qunaco" class="coloring" value="<?php echo get_option('qunaco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>
