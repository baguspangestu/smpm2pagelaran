    <tr valign="top">
        <td class="tl">
		    <label><?php _e('General', 'mading'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Body BG', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="bodbg" id="bodbg" class="coloring" value="<?php echo get_option('bodbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
				        <label><?php _e('Text Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="madteco" id="madteco" class="coloring" value="<?php echo get_option('madteco'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Color', 'mading'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="madlnkco" id="madlnkco" class="coloring" value="<?php echo get_option('madlnkco'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
	</tr>
			
			<tr valign="top">
                <td class="tl">
        		    <label><?php _e('Top Header', 'mading'); ?></label>
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
						        <input type="text" name="openbg" id="openbg" class="coloring" value="<?php echo get_option('openbg'); ?>"/> 
							</div>
						    <div class="quarter">
						        <label><?php _e('Text Color', 'mading'); ?></label> 
							</div>
							<div class="quarter">
						        <input type="text" name="openco" id="openco" class="coloring" value="<?php echo get_option('openco'); ?>"/> 
							</div>
						</div>
				
						<div class="clear">
						    <div class="quarter">
						        <label><?php _e('Kontak BG', 'mading'); ?></label> 
							</div>
							<div class="quarter">
						        <input type="text" name="arrowbg" id="arrowbg" class="coloring" value="<?php echo get_option('arrowbg'); ?>"/> 
							</div>
						    <div class="quarter">
						        <label><?php _e('Kontak Color', 'mading'); ?></label> 
							</div>
							<div class="quarter">
						        <input type="text" name="arrowco" id="arrowco" class="coloring" value="<?php echo get_option('arrowco'); ?>"/> 
							</div>
						</div>
				
					</div>
				</td>
		    </tr>
