<div id="styles">
	<div class="btable">
	<table width="100%">
	    	<tr>
				<td class="tl"><label>Layout Tema</label></td>
				<td>
					<div class="half">
						<input type="radio" name="boxed" value="noboxed" <?php echo (get_option('boxed') == 'noboxed') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Full-width', 'mading'); ?></span> 
					</div>
					<div class="half">
						<input type="radio" name="boxed" value="boxed" <?php echo (get_option('boxed') == 'boxed') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Boxed', 'mading'); ?></span>
					</div>
				</td>
			</tr>
			<tr>
		    	<td class="tl"><label>Menu Mobile</label></td>
				<td> 
	        		<div class="half">
						<input type="radio" name="fixed" value="nofixed" <?php echo (get_option('fixed') == 'nofixed') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Scroll Menu', 'mading'); ?></span>
					</div>
					<div class="half">
						<input type="radio" name="fixed" value="fixed" <?php echo (get_option('fixed') == 'fixed') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Fixed Menu', 'mading'); ?></span>
					</div>
				</td>
			</tr>
			<tr valign="top">
	        	<td class="tl">
			        <label for="headbg">Slider Size</label>
		    	</td>
		    	<td>
		    	    <div>
			        	Pengaturan ukuran gambar Slide saat ini <?php echo (get_option('swidth')) ? get_option('swidth') : '1100' ?> x <?php echo (get_option('sheight')) ? get_option('sheight') : '525' ?> (default bawaan tema adalah 1100 x 525 pixel)<br/><br/>
		    		</div>
					<div class="clear">
					    <div class="quarter">
						    <label>Width</label>
						</div>
				    	<div class="quarter">
				        	<input type="text" name="swidth" id="swidth" class="widefat" placeholder="misal, 1100..." value="<?php echo get_option('swidth'); ?>"/> 
		    	     	</div>
					</div>
					<div class="clear">
						<div class="quarter">
						    <label>Height</label>
						</div>
				    	<div class="quarter">
				        	<input type="text" name="sheight" id="sheight" class="widefat" placeholder="misal, 525..." value="<?php echo get_option('sheight'); ?>"/> 
		    	     	</div>
						<br/><br/>
						<span class="description"><strong>PENTING</strong> : Perubahan ukuran slide tidak akan berpengaruh pada gambar yang telah di upload sebelum setting ini di atur. Ukuran baru akan bekerja pada gambar yang di upload setelah setting ini dilakukan. JIka Anda tetap ingin ukuran gambar baru ini bekerja pada gambar-gambar tersebut maka perlu mengatur ulang seluruh gambar (regenerate thumbnail) dan saran adalah dengan menggunakan plugin 
						<a href="https://wordpress.org/plugins/regenerate-thumbnails/" target="_blank"> Regenerate Thumbnails</a> (Alex Mills) atau plugin yang memiliki fungsi serupa<br/><br/>
		    	    	</span>
						<br/><br/>
					</div>
				</td>
			</tr>
			<tr>
	    		<td class="tl"><label>Event BG</label></td>
				<td>
					<div class="pekol">
		    	    	<?php if (get_option('bgpar')) { ?>
	    		    		<span class="pek bl">x</span>
		   	    	<?php } else { ?>
		    		    	<span class="pek no">x</span>
		    		    <?php } ?>
		    		    <img class="custom_bgpar" src="<?php echo get_option('bgpar'); ?>"/><br/>
		    		</div>
	    		    <div class="pekol">
		    		    <input class="custom_media_url" id="bgpar" type="hidden" name="bgpar" value="<?php echo get_option('bgpar'); ?>"> <a href="#" class="button parallax custom_media_upload">Upload Gambar</a><br/>
		    		</div>
	
        		    <span class="description"><strong>PENTING</strong> : Siapkan gambar berukuran besar, contoh gambar berukuran panjang lebih dari 1000px</span>
		    		<br/><br/>
				
				</td>
	    	</tr>		
			
			<tr valign="top">
	    	<td class="tl">
			    <label for="headbg">GOOGLE MAPS</label>
			</td>
			<td>
			    <div>
			    	Fitur on / off untuk Google Maps. Silahkan di nonaktifkan jika tidak dibutuhkan<br/><br/>
		    	</div>
				<div class="clear">
			    	<div class="quarter">
				    	<label>On / Off Maps</label>
					</div>
					<div class="quarter">
			        	<input type="radio" name="gomaps" value="on" <?php echo (get_option('gomaps') == 'on') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Aktifkan', 'wp-compro'); ?></span> 
		        	</div>
		        	<div class="quarter">
		        		<input type="radio" name="gomaps" value="off" <?php echo (get_option('gomaps') == 'off') ? 'checked="checked"' : ''; ?>/><span class="bold"><?php _e('Nonaktifkan', 'wp-compro'); ?></span>
		        	</div>
					<br/><br/>
				</div>
				<div class="clear">
				    <div class="quarter">
					    <label>Maps Zoom</label>
					</div>
			    	<div class="trequarter">
			        	<input type="text" name="zoom" id="zoom" class="widefat" placeholder="masukkan angka 1 - 21..." value="<?php echo get_option('zoom'); ?>"/> 
		         	</div>
					<br/><br/>
				</div>
				<div class="clear">
				    <div class="quarter">
					    <label>Maps Height</label>
					</div>
			    	<div class="trequarter">
			        	<input type="text" name="mheight" id="mheight" class="widefat" placeholder="misal, 300px..." value="<?php echo get_option('mheight'); ?>"/> 
		         	</div>
					<br/><br/>
				</div>
			</td>
		</tr>
	            <script>
		    	jQuery(document).ready(function($){
		    		$('.commaps').click(function() {
				    	var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						wp.media.editor.send.attachment = function(props, attachment) {
						jQuery(".cus_mark").attr('src', attachment.url);
						$(button).prev().val(attachment.url);
						wp.media.editor.send.attachment = send_attachment_bkp;
						$('.cus_mark, .mark').show();
						}
						wp.media.editor.open(button);
						return false;  
					});
					$(".mark").click(function(){
						$('#mmaps').val('');
						$('.cus_mark, .mark').hide();
					});
				});
            </script>
        			
		<tr valign="top">
	    	<td class="tl">
			    <label for="headbg">MAPS MARKER</label>
			</td>
	     	<td>
			    <div>
			    	Tambahkan gambar untuk penanda lokasi maps.
		    	</div>
		    	<div class="pekol">
		        	<?php if (get_option('mmaps')) { ?>
		    	    	<span class="mark bl">x</span>
		        	<?php } else { ?>
		        		<span class="mark no">x</span>
		        	<?php } ?>
		        	<img class="cus_mark" src="<?php echo get_option('mmaps'); ?>"/><br/>
		    	</div>
	         	<div class="pekol">
			        <input class="custom_media_url" id="mmaps" type="hidden" name="mmaps" value="<?php echo get_option('mmaps'); ?>"> <a href="#" class="button commaps custom_media_upload">Upload Gambar</a><br/>
		     	</div>
	
            	<span class="description"><strong>PENTING</strong> : Gunakan gambar berformat PNG (transparan) dengan ukuran kotak (misal 100x100 pixel)</span>
		    	<br/><br/>
	    	</td>
    	</tr>
			
			
    	</table>
	</div>
</div>
			