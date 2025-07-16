	<tr valign="top">
        <td class="tl">
		    <label><?php _e('After Slider', 'mading'); ?></label>
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
				        <input type="text" name="afslidebg" id="afslidebg" class="coloring" value="<?php echo get_option('afslidebg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Heading Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="asco" id="asco" class="coloring" value="<?php echo get_option('asco'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Aksen BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="akbg" id="akbg" class="coloring" value="<?php echo get_option('akbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Right Icon BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ribg" id="ribg" class="coloring" value="<?php echo get_option('ribg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Icon Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="rico" id="rico" class="coloring" value="<?php echo get_option('rico'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
    </tr>
