<?php

add_action('admin_menu', 'mading_add_page');
function mading_add_page()
{
	$mading_options_page = add_menu_page('Mading', '<span style="color: #8c3; font-weight: bold">Kustomisasi</span>', 'manage_options', 'madings', 'options_page', 'dashicons-list-view', 2);
}

function options_page()
{
	// Cek update input pengaturan
	if ($_POST['update_options'] == 'true') {

		update_option('sekolah', $_POST['sekolah']);
		update_option('npsn', $_POST['npsn']);
		update_option('alamat', $_POST['alamat']);
		update_option('maps', $_POST['maps']);
		update_option('apikey', $_POST['apikey']);
		update_option('kecamatan', $_POST['kecamatan']);
		update_option('kabupaten', $_POST['kabupaten']);
		update_option('provinsi', $_POST['provinsi']);
		update_option('kodepos', $_POST['kodepos']);
		update_option('telepon', $_POST['telepon']);
		update_option('fax', $_POST['fax']);
		update_option('email', $_POST['email']);

		update_option('facebook', $_POST['facebook']);
		update_option('twitter', $_POST['twitter']);
		update_option('google', $_POST['google']);
		update_option('youtube', $_POST['youtube']);

		update_option('gtkepsek', $_POST['gtkepsek']);
		update_option('gtakabaru', $_POST['gtakabaru']);
		update_option('gtakaedit', $_POST['gtakaedit']);
		update_option('gtumum', $_POST['gtumum']);
		update_option('gtakaagenda', $_POST['gtakaagenda']);
		update_option('gtakaguru', $_POST['gtakaguru']);
		update_option('gtquotes', $_POST['gtquotes']);
		update_option('gtpres', $_POST['gtpres']);
		update_option('gtfasilitas', $_POST['gtfasilitas']);
		update_option('gtgtk', $_POST['gtgtk']);
		update_option('footer', stripslashes($_POST['footer']));

		update_option('logo_url', $_POST['logo_url']);
		update_option('favicon', $_POST['favicon']);
		update_option('bgpar', $_POST['bgpar']);
		update_option('mwarna', $_POST['mwarna']);
		update_option('boxed', $_POST['boxed']);
		update_option('fixed', $_POST['fixed']);
		update_option('swidth', $_POST['swidth']);
		update_option('sheight', $_POST['sheight']);

		update_option('gomaps', $_POST['gomaps']);
		update_option('zoom', $_POST['zoom']);
		update_option('mheight', $_POST['mheight']);
		update_option('mmaps', $_POST['mmaps']);

		update_option('bodbg', $_POST['bodbg']);
		update_option('madteco', $_POST['madteco']);
		update_option('madlnkco', $_POST['madlnkco']);

		update_option('openbg', $_POST['openbg']);
		update_option('openco', $_POST['openco']);
		update_option('arrowbg', $_POST['arrowbg']);
		update_option('arrowco', $_POST['arrowco']);
		update_option('headbg', $_POST['headbg']);
		update_option('opheadbg', $_POST['opheadbg']);
		update_option('menuco', $_POST['menuco']);

		update_option('smbg', $_POST['smbg']);
		update_option('smbgho', $_POST['smbgho']);
		update_option('smco', $_POST['smco']);
		update_option('smcoho', $_POST['smcoho']);
		update_option('headicobg', $_POST['headicobg']);
		update_option('headicoco', $_POST['headicoco']);

		update_option('caribg', $_POST['caribg']);
		update_option('carico', $_POST['carico']);
		update_option('cariin', $_POST['cariin']);
		update_option('carisub', $_POST['carisub']);
		update_option('subco', $_POST['subco']);

		update_option('afslidebg', $_POST['afslidebg']);
		update_option('asco', $_POST['asco']);
		update_option('akbg', $_POST['akbg']);
		update_option('ribg', $_POST['ribg']);
		update_option('rico', $_POST['rico']);

		update_option('sekinbg', $_POST['sekinbg']);
		update_option('sekinco', $_POST['sekinco']);
		update_option('sekarbg', $_POST['sekarbg']);
		update_option('sekarco', $_POST['sekarco']);

		update_option('lpbg', $_POST['lpbg']);
		update_option('inbg', $_POST['inbg']);
		update_option('inco', $_POST['inco']);
		update_option('ovinbg', $_POST['ovinbg']);
		update_option('datinco', $_POST['datinco']);
		update_option('titinco', $_POST['titinco']);

		update_option('seedbg', $_POST['seedbg']);
		update_option('edbg', $_POST['edbg']);
		update_option('edco', $_POST['edco']);
		update_option('editbg', $_POST['editbg']);
		update_option('editco', $_POST['editco']);
		update_option('editakco', $_POST['editakco']);

		update_option('sibg', $_POST['sibg']);
		update_option('siheadbg', $_POST['siheadbg']);
		update_option('siakco', $_POST['siakco']);
		update_option('fpbg', $_POST['fpbg']);
		update_option('fpdaco', $_POST['fpdaco']);
		update_option('fptico', $_POST['fptico']);
		update_option('postbg', $_POST['postbg']);
		update_option('andaco', $_POST['andaco']);
		update_option('antico', $_POST['antico']);
		update_option('rmbg', $_POST['rmbg']);
		update_option('rmhvbg', $_POST['rmhvbg']);
		update_option('rmco', $_POST['rmco']);
		update_option('rmhvco', $_POST['rmhvco']);

		update_option('evovbg', $_POST['evovbg']);
		update_option('evovop', $_POST['evovop']);
		update_option('evdtco', $_POST['evdtco']);
		update_option('evmoco', $_POST['evmoco']);
		update_option('evtimbg', $_POST['evtimbg']);
		update_option('evtimco', $_POST['evtimco']);
		update_option('evttlco', $_POST['evttlco']);
		update_option('evtxco', $_POST['evtxco']);
		update_option('countbg', $_POST['countbg']);
		update_option('countco', $_POST['countco']);
		update_option('secbg', $_POST['secbg']);
		update_option('secco', $_POST['secco']);

		update_option('gallbg', $_POST['gallbg']);
		update_option('gallbgop', $_POST['gallbgop']);
		update_option('ovgallbg', $_POST['ovgallbg']);
		update_option('gallco', $_POST['gallco']);
		update_option('gallak', $_POST['gallak']);

		update_option('quotebg', $_POST['quotebg']);
		update_option('quheadco', $_POST['quheadco']);
		update_option('quteco', $_POST['quteco']);
		update_option('qunaco', $_POST['qunaco']);

		update_option('gurusbg', $_POST['gurusbg']);
		update_option('guheadco', $_POST['guheadco']);
		update_option('guakco', $_POST['guakco']);
		update_option('guteco', $_POST['guteco']);
		update_option('gunabg', $_POST['gunabg']);
		update_option('gunaco', $_POST['gunaco']);
		update_option('guphobg', $_POST['guphobg']);
		update_option('gushabg', $_POST['gushabg']);

		update_option('brdbg', $_POST['brdbg']);
		update_option('brdco', $_POST['brdco']);
		update_option('brdlico', $_POST['brdlico']);

		update_option('pcheadco', $_POST['pcheadco']);
		update_option('pcdtbg', $_POST['pcdtbg']);
		update_option('pcdtco', $_POST['pcdtco']);
		update_option('pcdabo', $_POST['pcdabo']);
		update_option('pcdash', $_POST['pcdash']);

		update_option('tagsbg', $_POST['tagsbg']);
		update_option('tagsco', $_POST['tagsco']);
		update_option('relbg', $_POST['relbg']);
		update_option('relco', $_POST['relco']);

		update_option('poevbg', $_POST['poevbg']);
		update_option('devco', $_POST['devco']);
		update_option('tevbg', $_POST['tevbg']);
		update_option('tevco', $_POST['tevco']);
		update_option('texevco', $_POST['texevco']);
		update_option('pevcoubg', $_POST['pevcoubg']);
		update_option('pevcouco', $_POST['pevcouco']);
		update_option('pesecbg', $_POST['pesecbg']);
		update_option('pesecco', $_POST['pesecco']);

		update_option('sdheadbg', $_POST['sdheadbg']);
		update_option('sdborbg', $_POST['sdborbg']);
		update_option('sdtxco', $_POST['sdtxco']);
		update_option('sdlkco', $_POST['sdlkco']);
		update_option('sddtbg', $_POST['sddtbg']);
		update_option('sddtco', $_POST['sddtco']);
		update_option('sdmtbg', $_POST['sdmtbg']);
		update_option('sdmtco', $_POST['sdmtco']);
		update_option('sdtevbg', $_POST['sdtevbg']);
		update_option('sdtevco', $_POST['sdtevco']);

		update_option('footbg', $_POST['footbg']);
		update_option('fosdheadbg', $_POST['fosdheadbg']);
		update_option('fosdborbg', $_POST['fosdborbg']);
		update_option('footbartco', $_POST['footbartco']);
		update_option('footbarlkco', $_POST['footbarlkco']);
		update_option('fosddtbg', $_POST['fosddtbg']);
		update_option('fosddtco', $_POST['fosddtco']);
		update_option('fosdmtbg', $_POST['fosdmtbg']);
		update_option('fosdmtco', $_POST['fosdmtco']);
		update_option('fosdtevbg', $_POST['fosdtevbg']);
		update_option('fosdtevco', $_POST['fosdtevco']);

		update_option('footerbg', $_POST['footerbg']);
		update_option('ftexco', $_POST['ftexco']);
		update_option('flinkco', $_POST['flinkco']);
		update_option('totopbg', $_POST['totopbg']);
		update_option('totopco', $_POST['totopco']);
	}
?>


	<div class="seet">
		<div class="severlay"></div>
		<div class="outer">
			<?php wp_enqueue_style('awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css'); ?>
			<?php wp_enqueue_style('admin-css', get_template_directory_uri() . '/css/admin-css.css'); ?>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$("document").ready(function($) {
					$("#change, #layout, #setting, #styles, #external").slideUp();
					$(".welcome").click(function() {
						$(".welcome").css("background", "#89cc97");
						$("#welcome").slideDown();
						$("#change, #layout, #setting, #styles, #external").slideUp();
						$(".change, .layout, .setting, .styles, .external").css("background", "none");
					});
					$(".setting").click(function() {
						$(".setting").css("background", "#89cc97");
						$("#setting").slideDown();
						$("#change, #layout, #welcome, #styles, #external").slideUp();
						$(".change, .layout, .welcome, .styles, .external").css("background", "none");
					});
					$(".change").click(function() {
						$(".change").css("background", "#89cc97");
						$("#change").slideDown();
						$("#setting, #layout, #welcome, #styles, #external").slideUp();
						$(".setting, .layout, .welcome, .styles, .external").css("background", "none");
					});
					$(".layout").click(function() {
						$(".layout").css("background", "#89cc97");
						$("#layout").slideDown();
						$("#change, #setting, #welcome, #styles, #external").slideUp();
						$(".change, .setting, .welcome, .styles, .external").css("background", "none");
					});
					$(".styles").click(function() {
						$(".styles").css("background", "#89cc97");
						$("#styles").slideDown();
						$("#change, #setting, #welcome, #layout, #external").slideUp();
						$(".change, .setting, .welcome, .layout, .external").css("background", "none");
					});
					$(".external").click(function() {
						$(".external").css("background", "#89cc97");
						$("#external").slideDown();
						$("#change, #setting, #welcome, #styles, #layout").slideUp();
						$(".change, .setting, .welcome, .styles, .layout").css("background", "none");
					});
					$(".submit").click(function() {
						$(".severlay").css("z-index", "300");
					});
					$(".cus").click(function() {
						$('.closed').removeClass("nocustom");
						$('.closed').addClass("custom");
					});
					$(".nocus").click(function() {
						$('.closed').removeClass("custom");
						$('.closed').addClass("nocustom");
					});
				});
			</script>

			<script>
				$(window).scroll(function() {
					if ($(this).scrollTop() >= 150) {
						$('#msub').fadeIn(200);
					} else {
						$('#msub').fadeOut(200);
					}
				});
			</script>

			<?php if (function_exists('wp_enqueue_media')) {
				wp_enqueue_media();
			} else {
				wp_enqueue_style('thickbox');
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
			}
			?>

			<script>
				jQuery(document).ready(function($) {
					$('.custom_media_upload').click(function() {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);

						wp.media.editor.send.attachment = function(props, attachment) {
							$(button).prev().prev().attr('src', attachment.url);
							$(button).prev().val(attachment.url);

							wp.media.editor.send.attachment = send_attachment_bkp;
						}

						wp.media.editor.open(button);
						return false;
					});
				});
			</script>

			<form method="post" action="">
				<input class="submit" type="submit" id="msub" value="SIMPAN" />
				<input type="hidden" name="update_options" value="true" />
				<div class="tab_block">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="mlogo" />
					<input id="save" class="submit" type="submit" value="SIMPAN" />
				</div>

				<div class="set_block">
					<div class="inn">
						<div class="lmenu">
							<div class="welcome curs"><i class="fa fa-home"></i> <span>DASBOR TEMA</span></div>
							<div class="setting curs"><i class="fa fa-navicon"></i> <span>INFO SEKOLAH</span></div>
							<div class="change curs"><i class="fa fa-edit"></i> <span>REPLACE TEXT</span></div>
							<div class="styles curs"><i class="fa fa-cube"></i> <span>LAYOUT & STYLE</span></div>
							<div class="layout curs"><i class="fa fa-users"></i> <span>CUSTOM COLOR</span></div>
						</div>

						<div class="rmenu">

							<div class="resetmore">
								<div class="inreset">
									PERINGATAN: Memilih Style pada bagian ini akan menghapus semua hasil Custom Color yang tersimpan
									sebelumnya. Apakah Anda yakin akan menghapus pengaturan Custom Color?<br /><br />
									<input id="sure" class="submit" type="submit" value="LANJUT" />
									<input id="batal" type="radio" name="mwarna" value="none" class="none"
										<?php echo (get_option('mwarna') == 'none') ? 'checked="checked"' : ''; ?> />
									<span class="breset"><?php _e('BATAL', 'mading'); ?></span>
								</div>
							</div>

							<div id="welcome">
								<div class="wel">
									<h3>
										Selamat datang
										<?php $user = wp_get_current_user();
										printf(__(', <em>%s</em> di Dasbor Mading', 'mading'), esc_html($user->user_login)) . ''; ?>
									</h3>

									<?php if ($user) : ?>
										<br /><img src="<?php echo esc_url(get_avatar_url($user->ID)); ?>" /><br /><br /><br />
									<?php endif; ?><div class="content">
										Ini adalah panel pengaturan untuk situs ini, administrator website dapat melengkapi atau merubah
										data sesuai dengan keperluan.
									</div>
								</div>
							</div>

							<?php get_template_part('admin/profile'); ?>
							<?php get_template_part('admin/replace'); ?>
							<?php get_template_part('admin/layout'); ?>
							<?php get_template_part('admin/custom'); ?>

							<div id="external">
								<div class="btable">
									<table width="100%">

										<?php get_template_part('admin/developer'); ?>

									</table>
								</div>
							</div>

						</div>
					</div>
				</div>

			</form>

			<?php
			wp_enqueue_style('rangecss', get_template_directory_uri() . '/css/rangeslider.css');
			wp_enqueue_style('wp-color-picker');
			wp_enqueue_script('custom-script-handle', plugins_url('custom-script.js', __FILE__), array('wp-color-picker'), false, true);
			?>
			<script src="<?php echo get_template_directory_uri(); ?>/js/rangeslider.js"></script>
			<script>
				(function($) {
					$(function() {
						$('.coloring').wpColorPicker();
					});
				})(jQuery);
			</script>
			<?php get_template_part('admin/js/input'); ?>


		</div>
	</div>
<?php } ?>