	            <script>
jQuery(document).ready(function($) {
  $('.blogo_url').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
      jQuery(".custom_media_image").attr('src', attachment.url);
      $(button).prev().val(attachment.url);
      wp.media.editor.send.attachment = send_attachment_bkp;
      $('.custom_media_image, .lek').show();
    }
    wp.media.editor.open(button);
    return false;
  });
  $(".lek").click(function() {
    $('#logo_url').val('');
    $('.custom_media_image, .lek').hide();
  });

  $('.favicons').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
      jQuery(".custom_favicon").attr('src', attachment.url);
      $(button).prev().val(attachment.url);
      wp.media.editor.send.attachment = send_attachment_bkp;
      $('.custom_favicon, .fak').show();
    }
    wp.media.editor.open(button);
    return false;
  });
  $(".fak").click(function() {
    $('#favicon').val('');
    $('.custom_favicon, .fak').hide();
  });

  $('.parallax').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
      jQuery(".custom_bgpar").attr('src', attachment.url);
      $(button).prev().val(attachment.url);
      wp.media.editor.send.attachment = send_attachment_bkp;
      $('.custom_bgpar, .pek').show();
    }
    wp.media.editor.open(button);
    return false;
  });
  $(".pek").click(function() {
    $('#bgpar').val('');
    $('.custom_bgpar, .pek').hide();
  });

  $('.bgbox').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
      jQuery(".custom_box").attr('src', attachment.url);
      $(button).prev().val(attachment.url);
      wp.media.editor.send.attachment = send_attachment_bkp;
      $('.custom_bgbox, .tek').show();
    }
    wp.media.editor.open(button);
    return false;
  });
  $(".tek").click(function() {
    $('#lybox').val('');
    $('.custom_box, .tek').hide();
  });
});
	            </script>

	            <div id="setting">
	              <div class="btable">
	                <table width="100%">
	                  <tr>
	                    <td class="tl"><label>Ganti Logo</label></td>
	                    <td>
	                      <div class="pekol">
	                        <?php if (get_option('logo_url')) { ?>
	                        <span class="lek bl">x</span>
	                        <?php } else { ?>
	                        <span class="lek no">x</span>
	                        <?php } ?>
	                        <img class="custom_media_image" src="<?php echo get_option('logo_url'); ?>" /><br />
	                      </div>
	                      <div class="pekol">
	                        <input class="custom_media_url" id="logo_url" type="hidden" name="logo_url"
	                          value="<?php echo get_option('logo_url'); ?>"> <a href="#"
	                          class="button blogo_url custom_media_upload">Upload Logo</a><br />
	                      </div>

	                      <span class="description"><strong>PENTING</strong> : Siapkan gambar logo gambar berformat
	                        <strong>PNG transparan</strong> (tembus pandang) atau gambar berformat JPG dengan background
	                        serupa header</span>
	                      <br /><br />

	                    </td>
	                  </tr>
	                  <tr>
	                    <td class="tl"><label>Ganti Favicon</label></td>
	                    <td>
	                      <div class="pekol">
	                        <?php if (get_option('favicon')) { ?>
	                        <span class="fak bl">x</span>
	                        <?php } else { ?>
	                        <span class="fak no">x</span>
	                        <?php } ?>
	                        <img class="custom_favicon" src="<?php echo get_option('favicon'); ?>" /><br />
	                      </div>
	                      <div class="pekol">
	                        <input class="custom_media_url" id="favicon" type="hidden" name="favicon"
	                          value="<?php echo get_option('favicon'); ?>"> <a href="#"
	                          class="button favicons custom_media_upload">Upload Favicon</a><br />
	                      </div>

	                      <span class="description"><strong>PENTING</strong> : Untuk favicon (ikon header website)
	                        pergunakan gambar persegi dengan ukuran 1:1 (misal 64x64 pixel) dan format jpg, gif, atau
	                        png</span>
	                      <br /><br />

	                    </td>
	                  </tr>
	                  <tr valign="top">
	                    <td class="tl"><label for="sekolah"><?php _e('Nama sekolah', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="sekolah" id="sekolah"
	                        value="<?php echo get_option('sekolah'); ?>" /><span class="description">
	                        <?php _e('contoh, SMP Negeri 1 Ambarawa', 'mading'); ?></span>
	                    </td>
	                  </tr>
	                  <tr valign="top">
	                    <td class="tl"><label for="npsn"><?php _e('NPSN', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="npsn" id="npsn" value="<?php echo get_option('npsn'); ?>" /><span
	                        class="description"> <?php _e('contoh, 123467890', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="alamat"><?php _e('Alamat Sekolah', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="alamat" id="alamat" value="<?php echo get_option('alamat'); ?>" /><span
	                        class="description"> <?php _e('contoh, Jalan Sapuhanda No.01', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="maps"><?php _e('Koordinat', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="maps" id="maps" value="<?php echo get_option('maps'); ?>" /><span
	                        class="description">
	                        <?php _e('contoh, -5.412412105689631, 104.94230053666226 (lat dan lang dipisah koma)', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="apikey"><?php _e('API Key Maps', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="apikey" id="apikey" value="<?php echo get_option('apikey'); ?>" /><span
	                        class="description"> <?php _e('dapatan kode API Key dari ', 'mading'); ?><a
	                          href="https://developers.google.com/maps/web/" target="_blank">Google Dev</a></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="kecamatan"><?php _e('Kecamatan', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="kecamatan" id="kecamatan"
	                        value="<?php echo get_option('kecamatan'); ?>" /><span class="description">
	                        <?php _e('contoh, Ambarawa', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="kabupaten"><?php _e('Kabupaten', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="kabupaten" id="kabupaten"
	                        value="<?php echo get_option('kabupaten'); ?>" /><span class="description">
	                        <?php _e('contoh, Pringsewu', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="provinsi"><?php _e('Provinsi', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="provinsi" id="provinsi"
	                        value="<?php echo get_option('provinsi'); ?>" /><span class="description">
	                        <?php _e('contoh, Lampung', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="kodepos"><?php _e('Kode Pos', 'mading'); ?></label></td>
	                    <td><input type="text" name="kodepos" id="kodepos"
	                        value="<?php echo get_option('kodepos'); ?>" /><span class="description">
	                        <?php _e('contoh, 35376', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="telepon"><?php _e('Telepon', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="telepon" id="telepon"
	                        value="<?php echo get_option('telepon'); ?>" /><span class="description">
	                        <?php _e('contoh, 083815251385', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="fax"><?php _e('Fax', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="fax" id="fax" value="<?php echo get_option('fax'); ?>" /><span
	                        class="description"> <?php _e('contoh, 0724-1234567', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="email"><?php _e('Email', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" /><span
	                        class="description"> <?php _e('contoh, pixelthanos@gmail.com', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="facebook"><?php _e('Facebook', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="facebook" id="facebook"
	                        value="<?php echo get_option('facebook'); ?>" /><span class="description">
	                        <?php _e('contoh, http://facebook.com/penikmatlore', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="google"><?php _e('Instagram', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="google" id="google" value="<?php echo get_option('google'); ?>" /><span
	                        class="description"> <?php _e('contoh, http://instagram.com/penikmatlore', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="twitter"><?php _e('X', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="twitter" id="twitter"
	                        value="<?php echo get_option('twitter'); ?>" /><span class="description">
	                        <?php _e('contoh, http://x.com/penikmatlore', 'mading'); ?></span>
	                    </td>
	                  </tr>

	                  <tr valign="top">
	                    <td class="tl"><label for="youtube"><?php _e('Youtube', 'mading'); ?></label></td>
	                    <td>
	                      <input type="text" name="youtube" id="youtube"
	                        value="<?php echo get_option('youtube'); ?>" /><span class="description">
	                        <?php _e('contoh, http://youtube.com/@pixanos', 'mading'); ?></span>
	                    </td>
	                  </tr>
	                </table>
	              </div>
	            </div>