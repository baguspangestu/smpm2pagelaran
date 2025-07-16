	<div id="change">
    	<div class="btable">
	    	<table width="100%">
		    <tr valign="top">
			    <td class="head" colspan="2">
					Pengaturan ganti text digunakan untuk mengganti beberapa text default, khususnya text judul / heading yang ada di halaman Beranda website.
				</td>
			</tr>
			<tr valign="top">
		    	<td class="tl"><label for="footer"><?php _e('Footer / Copyright', 'mading'); ?></label></td>
				<td> 
				<?php $settings = array(
			    	'teeny' => true,
					'textarea_rows' => 4,
					'tabindex' => 1
					);
					$content = get_option('footer');
					wp_editor($content, 'footer', $settings);
				?>
				</td>
			</tr>
			
			<tr valign="top">
		    	<td class="tl"><label for="gtkepsek"><?php _e('Kepala Sekolah', 'mading'); ?></label></td>
				<td> 
			    	<input type="text" name="gtkepsek" id="gtkepsek" value="<?php echo get_option('gtkepsek'); ?>"/><span class="description"> <?php _e('contoh, Kepala Yayasan', 'mading'); ?></span>
				</td>
			</tr>
			
			<tr valign="top">
		    	<td class="tl"><label for="gtakabaru"><?php _e('Artikel Terbaru', 'mading'); ?></label></td>
				<td> 
			    	<input type="text" name="gtakabaru" id="gtakabaru" value="<?php echo get_option('gtakabaru'); ?>"/><span class="description"> <?php _e('contoh, Berita Terbaru', 'mading'); ?></span>
				</td>
	    	</tr>
			<tr valign="top">
				<td class="tl"><label for="gtakaedit"><?php _e('Editorial', 'mading'); ?></label></td>
				<td>
				    <input type="text" name="gtakaedit" id="gtakaedit" value="<?php echo get_option('gtakaedit'); ?>"/><span class="description"> <?php _e('contoh, Artikel Kepala Sekolah', 'mading'); ?></span>
	    		</td>
    		</tr>
    		<tr valign="top">
    			<td class="tl"><label for="gtumum"><?php _e('Pengumuman', 'mading'); ?></label></td>
    			<td>
    			    <input type="text" name="gtumum" id="gtumum" value="<?php echo get_option('gtumum'); ?>"/><span class="description"> <?php _e('contoh, Woro Woro', 'mading'); ?></span>
    			</td>
    		</tr>
    		<tr valign="top">
    			<td class="tl"><label for="gtakaagenda"><?php _e('Agenda Terbaru', 'mading'); ?></label></td>
	    		<td>
	    		    <input type="text" name="gtakaagenda" id="gtakaagenda" value="<?php echo get_option('gtakaagenda'); ?>"/><span class="description"> <?php _e('contoh, Event Terbaru', 'mading'); ?></span>
    			</td>
			</tr>
			<tr valign="top">
				<td class="tl"><label for="gtakaguru"><?php _e('Blog Guru', 'mading'); ?></label></td>
				<td>
				    <input type="text" name="gtakaguru" id="gtakaguru" value="<?php echo get_option('gtakaguru'); ?>"/><span class="description"> <?php _e('contoh, Artikel Guru', 'mading'); ?></span>
				</td>
			</tr>
			<tr valign="top">
				<td class="tl"><label for="gtquotes"><?php _e('Quotes', 'mading'); ?></label></td>
				<td>
				    <input type="text" name="gtquotes" id="gtquotes" value="<?php echo get_option('gtquotes'); ?>"/><span class="description"> <?php _e('contoh, Kata Mutiara', 'mading'); ?></span>
				</td>
			</tr>
			<tr valign="top">
				<td class="tl"><label for="gtpres"><?php _e('Prestasi', 'mading'); ?></label></td>
				<td>
				    <input type="text" name="gtpres" id="gtpres" value="<?php echo get_option('gtpres'); ?>"/><span class="description"> <?php _e('contoh, Daftar Prestasi', 'mading'); ?></span>
    			</td>
			</tr>
			<tr valign="top">
				<td class="tl"><label for="gtfasilitas"><?php _e('Ekskul', 'mading'); ?></label></td>
				<td>
	    		    <input type="text" name="gtfasilitas" id="gtfasilitas" value="<?php echo get_option('gtfasilitas'); ?>"/><span class="description"> <?php _e('contoh, Kegiatan Siswa', 'mading'); ?></span>
    			</td>
			</tr>
			<tr valign="top">
				<td class="tl"><label for="gtgtk"><?php _e('Daftar GTK', 'mading'); ?></label></td>
				<td>
				    <input type="text" name="gtgtk" id="gtgtk" value="<?php echo get_option('gtgtk'); ?>"/><span class="description"> <?php _e('contoh, Daftar Guru', 'mading'); ?></span>
				</td>
			</tr>
	    	</table>
    	</div>
    </div>
