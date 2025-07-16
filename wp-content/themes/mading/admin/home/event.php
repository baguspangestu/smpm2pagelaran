	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Event Info', 'mading'); ?></label>
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
				        <input type="text" name="evovbg" id="evovbg" class="coloring" value="<?php echo get_option('evovbg'); ?>"/> 
					</div>
					<div class="quarter">
					     <label><?php _e('Opacity', 'mading'); ?></label>
					</div>
					<div class="quarter">
					    <input name="evovop" style="width: 100%;" type="range" min="0" max="1" step="0.05" value="<?php echo (get_option('evovop')) ? get_option('evovop') : '1' ?>" data-orientation="vertical" />
				    </div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Date Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evdtco" id="evdtco" class="coloring" value="<?php echo get_option('evdtco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Month Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evmoco" id="evmoco" class="coloring" value="<?php echo get_option('evmoco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Time BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evtimbg" id="evtimbg" class="coloring" value="<?php echo get_option('evtimbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Time Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evtimco" id="evtimco" class="coloring" value="<?php echo get_option('evtimco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Title Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evttlco" id="evttlco" class="coloring" value="<?php echo get_option('evttlco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="evtxco" id="evtxco" class="coloring" value="<?php echo get_option('evtxco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Countdown BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="countbg" id="countbg" class="coloring" value="<?php echo get_option('countbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Countdown Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="countco" id="countco" class="coloring" value="<?php echo get_option('countco'); ?>"/> 
					</div>
		    	</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Second (Time) BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="secbg" id="secbg" class="coloring" value="<?php echo get_option('secbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Second (Time) Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="secco" id="secco" class="coloring" value="<?php echo get_option('secco'); ?>"/> 
					</div>
		    	</div>
				
			</div>
		</td>
    </tr>
