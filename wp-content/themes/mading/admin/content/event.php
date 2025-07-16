	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Post Event', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Overlay BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="poevbg" id="poevbg" class="coloring" value="<?php echo get_option('poevbg'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Event Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="devco" id="devco" class="coloring" value="<?php echo get_option('devco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Time Event BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tevbg" id="tevbg" class="coloring" value="<?php echo get_option('tevbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Time Event Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tevco" id="tevco" class="coloring" value="<?php echo get_option('tevco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Event Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="texevco" id="texevco" class="coloring" value="<?php echo get_option('texevco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Countdown BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pevcoubg" id="pevcoubg" class="coloring" value="<?php echo get_option('pevcoubg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Countdown Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pevcouco" id="pevcouco" class="coloring" value="<?php echo get_option('pevcouco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Second (Time) BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pesecbg" id="pesecbg" class="coloring" value="<?php echo get_option('pesecbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Second (Time) Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pesecco" id="pesecco" class="coloring" value="<?php echo get_option('pesecco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>