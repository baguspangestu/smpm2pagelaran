	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Search', 'mading'); ?></label>
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
				        <input type="text" name="caribg" id="caribg" class="coloring" value="<?php echo get_option('caribg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Input BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="cariin" id="cariin" class="coloring" value="<?php echo get_option('cariin'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Input Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="carico" id="carico" class="coloring" value="<?php echo get_option('carico'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Submit BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="carisub" id="carisub" class="coloring" value="<?php echo get_option('carisub'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Submit Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="subco" id="subco" class="coloring" value="<?php echo get_option('subco'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
    </tr>
