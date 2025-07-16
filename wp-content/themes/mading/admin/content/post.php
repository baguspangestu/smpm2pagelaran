	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Post Content', 'mading'); ?></label>
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
				        <input type="text" name="pcheadco" id="pcheadco" class="coloring" value="<?php echo get_option('pcheadco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pcdtbg" id="pcdtbg" class="coloring" value="<?php echo get_option('pcdtbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pcdtco" id="pcdtco" class="coloring" value="<?php echo get_option('pcdtco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Border', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pcdabo" id="pcdabo" class="coloring" value="<?php echo get_option('pcdabo'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Date Shadow', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pcdash" id="pcdash" class="coloring" value="<?php echo get_option('pcdash'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Tags BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tagsbg" id="tagsbg" class="coloring" value="<?php echo get_option('tagsbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Tags Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tagsco" id="tagsco" class="coloring" value="<?php echo get_option('tagsco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Related BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="relbg" id="relbg" class="coloring" value="<?php echo get_option('relbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="relco" id="relco" class="coloring" value="<?php echo get_option('relco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>