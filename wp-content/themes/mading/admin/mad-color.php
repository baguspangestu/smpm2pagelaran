<?php
$hex = get_option('headbg');
list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
$ccov = get_option('ovinbg');
list($c, $o, $v) = sscanf($ccov, "#%02x%02x%02x");
$fff = get_option('fpbg');
list($ff, $pp, $bb) = sscanf($fff, "#%02x%02x%02x");
$deal = get_option('evovbg');
list($ev, $ov, $bg) = sscanf($deal, "#%02x%02x%02x");
$agen = get_option('poevbg');
list($ag, $ge, $en) = sscanf($agen, "#%02x%02x%02x");

?>
<style>
  body {
    color: <?php echo (get_option('madteco')) ? get_option('madteco') : '#444' ?>;
    background: <?php echo (get_option('bodbg')) ? get_option('bodbg') : '#fff' ?>;
  }

  a {
    color: <?php echo (get_option('maslnkco')) ? get_option('maslnkco') : '#107bb6' ?>;
  }

  .open {
    background: <?php echo (get_option('openbg')) ? get_option('openbg') : '#036' ?>;
    color: <?php echo (get_option('openco')) ? get_option('openco') : '#fff' ?>;
  }

  .open .openarr {
    background: <?php echo (get_option('arrowbg')) ? get_option('arrowbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('arrowco')) ? get_option('arrowco') : '#036' ?>;
  }

  .open .openarr:after {
    border-left: 6px solid <?php echo (get_option('arrowbg')) ? get_option('arrowbg') : '#f0ca30' ?>;
  }

  .open span.h800 {
    background: <?php echo (get_option('arrowbg')) ? get_option('arrowbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('arrowco')) ? get_option('arrowco') : '#036' ?>;
  }

  .home .nav-inn {
    background: rgba(<?php echo (get_option('headbg')) ? '' . $r . ',' . $g . ',' . $b . '' : '255, 255, 255' ?>, <?php echo (get_option('opheadbg')) ? get_option('opheadbg') : '0.5' ?>);
  }

  .nav-inn {
    background: rgba(<?php echo (get_option('headbg')) ? '' . $r . ',' . $g . ',' . $b . '' : '255, 255, 255' ?>, 1);
  }

  .nav-inn.fade,
  .home .nav-inn.fade {
    background: <?php echo (get_option('headbg')) ? get_option('headbg') : '#fff' ?>;
  }

  .nav .dd li a {
    color: <?php echo (get_option('menuco')) ? get_option('menuco') : '#036' ?>;
  }

  .nav .dd li:after {
    border-left: 4px solid <?php echo (get_option('menuco')) ? get_option('menuco') : '#036' ?>;
  }

  .nav .dd li ul {
    background: <?php echo (get_option('smbg')) ? get_option('smbg') : '#003366' ?>;
  }

  .sub-menu:after {
    border-bottom: 6px solid <?php echo (get_option('smbg')) ? get_option('smbg') : '#003366' ?>;
  }

  .nav .dd li ul li:hover {
    background: <?php echo (get_option('smbgho')) ? get_option('smbgho') : '#f0ca30' ?>;
  }

  .nav .dd li ul li a {
    color: <?php echo (get_option('smco')) ? get_option('smco') : '#fff' ?>;
    /* level 1 */
  }

  .nav .dd li ul li:hover a {
    color: <?php echo (get_option('smcoho')) ? get_option('smcoho') : '#036' ?>;
  }

  .nav .dd li ul li a:hover {
    color: <?php echo (get_option('smcoho')) ? get_option('smcoho') : '#036' ?>;
  }

  .nav .dd li ul li ul li a {
    color: <?php echo (get_option('smco')) ? get_option('smco') : '#fff' ?>;
    /* level 2 */
  }

  .nav .dd li ul li:hover ul li a {
    color: <?php echo (get_option('smco')) ? get_option('smco') : '#fff ! important' ?>;
  }

  .nav .dd li ul li ul li:hover a {
    color: <?php echo (get_option('smcoho')) ? get_option('smcoho') : '#036 ! important' ?>;
  }

  .nav .dd li ul li ul li:hover ul li a {
    color: <?php echo (get_option('smco')) ? get_option('smco') : '#fff ! important' ?>;
  }

  .nav .dd li ul li ul li ul li a {
    color: <?php echo (get_option('smcoho')) ? get_option('smcoho') : '#036' ?>;
    /* level 3 */
  }

  .nav .dd li ul li ul li ul li:hover a {
    color: <?php echo (get_option('smcoho')) ? get_option('smcoho') : '#036 ! important' ?>;
  }

  .nav .dd li ul li ul.sub-menu:after {
    border-left: 6px solid <?php echo (get_option('smbgho')) ? get_option('smbgho') : '#f0ca30' ?>;
  }

  .fsearch.fa,
  .fmenu.fa {
    background: <?php echo (get_option('headicobg')) ? get_option('headicobg') : '#036' ?>;
    color: <?php echo (get_option('headicoco')) ? get_option('headicoco') : '#fff' ?>;
    border: 2px solid <?php echo (get_option('headicobg')) ? get_option('headicobg') : '#036' ?>;
  }

  .masearch {
    background: <?php echo (get_option('caribg')) ? get_option('caribg') : '#036' ?>;
  }

  .masearch .search_form:after {
    border-bottom: 10px solid <?php echo (get_option('caribg')) ? get_option('caribg') : '#036' ?>;
  }

  .masearch .search_form fieldset {
    background: <?php echo (get_option('caribg')) ? get_option('caribg') : '#036' ?>;
  }

  .masearch .search_form input,
  .masearch .search_form select {
    background: <?php echo (get_option('cariin')) ? get_option('cariin') : '#f0ca30' ?>;
    color: <?php echo (get_option('carico')) ? get_option('carico') : '#036' ?>;
  }

  .masearch .search_form button {
    background: <?php echo (get_option('carisub')) ? get_option('carisub') : '#f0ca30' ?>;
    color: <?php echo (get_option('subco')) ? get_option('subco') : '#036' ?>;
  }

  .maschol {
    background: <?php echo (get_option('afslidebg')) ? get_option('afslidebg') : '#fff' ?>;
  }

  .maschol h2 {
    color: <?php echo (get_option('asco')) ? get_option('asco') : '#036' ?>;
  }

  .maschol h2:before {
    border-top: 3px solid <?php echo (get_option('akbg')) ? get_option('akbg') : '#f3a331' ?>;
  }

  .kontak .fa {
    color: <?php echo (get_option('rico')) ? get_option('rico') : '#fff' ?>;
  }

  .kontak .fa-tiktok {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#3B5991' ?>;
  }

  .kontak .fa-facebook-f {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#3B5991' ?>;
  }

  .kontak .fa-x-twitter {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#3bf' ?>;
  }

  .kontak .fa-envelope {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#8c3' ?>;
  }

  .kontak .fa-feed {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#f90' ?>;
  }

  .kontak .fa-instagram,
  .kontak .fa-youtube {
    background: <?php echo (get_option('ribg')) ? get_option('ribg') : '#DB3330' ?>;
  }

  .dealpar {
    background-image: url("<?php echo (get_option('bgpar')) ? get_option('bgpar') . '' : 'images/school.jpg' ?>") ! important;
  }

  .madticker {
    background: <?php echo (get_option('sekinbg')) ? get_option('sekinbg') : '#003366' ?>;
  }

  ul.newstickers li {
    color: <?php echo (get_option('sekinco')) ? get_option('sekinco') : '#ffffff' ?> ! important
  }

  .madticker #infotit {
    background: <?php echo (get_option('sekarbg')) ? get_option('sekarbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('sekarco')) ? get_option('sekarco') : '#036' ?>;
  }

  .madticker #infotit:after {
    content: '';
    position: absolute;
    right: -8px;
    top: 0;
    width: 0;
    height: 0;
    margin: 0;
    border-bottom: 13px solid transparent;
    border-top: 13px solid transparent;
    border-left: 8px solid <?php echo (get_option('sekarbg')) ? get_option('sekarbg') : '#f0ca30' ?>;
    clear: both
  }

  .madticker .infotim:before {
    content: '';
    position: absolute;
    left: -8px;
    top: 0;
    width: 0;
    height: 0;
    margin: 0;
    border-bottom: 13px solid transparent;
    border-top: 13px solid transparent;
    border-right: 8px solid <?php echo (get_option('sekarbg')) ? get_option('sekarbg') : '#f0ca30' ?>;
    clear: both
  }

  .madticker .infotim {
    background: <?php echo (get_option('sekarbg')) ? get_option('sekarbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('sekarco')) ? get_option('sekarco') : '#036' ?>;
  }

  .bber {
    background: <?php echo (get_option('lpbg')) ? get_option('lpbg') : '#fff' ?>;
  }

  .barulev .abspan {
    background: <?php echo (get_option('inbg')) ? get_option('inbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('inco')) ? get_option('inco') : '#003366' ?>;
  }

  .ccovlay {
    background: linear-gradient(rgba(<?php echo (get_option('ovinbg')) ? '' . $c . ',' . $o . ',' . $v . '' : '0, 0, 0' ?>, 0), rgba(<?php echo (get_option('ovinbg')) ? '' . $c . ',' . $o . ',' . $v . '' : '0, 0, 0' ?>, 0.9));
  }

  .singlev .coverlay,
  .twocon {
    color: <?php echo (get_option('datinco')) ? get_option('datinco') : '#fff' ?>;
  }

  .coverlay h3 a,
  .seccon h3 a,
  .twocon h3 a {
    color: <?php echo (get_option('titinco')) ? get_option('titinco') : '#fff' ?> ! important;
  }

  .editoz .edspan {
    background: <?php echo (get_option('edbg')) ? get_option('edbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('edco')) ? get_option('edco') : '#036' ?>;
  }

  .edbot {
    background: <?php echo (get_option('edbg')) ? get_option('edbg') : '#f0ca30' ?>;
  }

  .edbot a {
    color: <?php echo (get_option('edco')) ? get_option('edco') : '#036' ?>;
  }

  .rconbg {
    background: <?php echo (get_option('editbg')) ? get_option('editbg') : '#036' ?>;
  }

  .corner a {
    color: <?php echo (get_option('editco')) ? get_option('editco') : '#fff' ?>;
  }

  .corner h3:after {
    border-right: 9px solid <?php echo (get_option('editakco')) ? get_option('editakco') : '#f0ca30' ?>;
  }

  .pbpe {
    background: <?php echo (get_option('sibg')) ? get_option('sibg') : '#fff' ?>;
  }

  .peaduo h3.fopen {
    color: <?php echo (get_option('siheadbg')) ? get_option('siheadbg') : '#036' ?>;
  }

  .peaduo h3.fopen:before {
    border-top: 3px solid <?php echo (get_option('siakco')) ? get_option('siakco') : '#f3a331' ?>;
  }

  .top-post {
    background: linear-gradient(rgba(<?php echo (get_option('fpbg')) ? '' . $ff . ',' . $pp . ',' . $bb . '' : '0, 0, 0' ?>, 0), rgba(<?php echo (get_option('fpbg')) ? '' . $ff . ',' . $pp . ',' . $bb . '' : '0, 0, 0' ?>, 0.9));
  }

  .six-info .metas {
    color: <?php echo (get_option('andaco')) ? get_option('andaco') : '#f40' ?>;
  }

  .six-info h3 a {
    color: <?php echo (get_option('antico')) ? get_option('antico') : '#036' ?>;
  }

  .six-info .top-post .metas {
    color: <?php echo (get_option('fpdaco')) ? get_option('fpdaco') : '#ddd' ?>;
  }

  .six-info .top-post h3 a {
    color: <?php echo (get_option('fptico')) ? get_option('fptico') : '#fff' ?>;
  }


  .readmore a {
    border: 2px solid <?php echo (get_option('rmbg')) ? get_option('rmbg') : '#036' ?>;
    background: <?php echo (get_option('rmbg')) ? get_option('rmbg') : '#036' ?>;
    color: <?php echo (get_option('rmco')) ? get_option('rmco') : '#fc0' ?>;
  }

  .readmore:hover a {
    border: 2px solid <?php echo (get_option('rmhvbg')) ? get_option('rmhvbg') : '#fc0' ?>;
    color: <?php echo (get_option('rmhvco')) ? get_option('rmhvco') : '#036' ?>;
    background: <?php echo (get_option('rmhvbg')) ? get_option('rmhvbg') : '#fc0' ?>;
  }

  .dealay {
    background: rgba(<?php echo (get_option('evovbg')) ? '' . $ev . ',' . $ov . ',' . $bg . '' : '0, 0, 0' ?>, <?php echo (get_option('evovop')) ? get_option('evovop') : '0.5' ?>);
    color: <?php echo (get_option('evtxco')) ? get_option('evtxco') : '#fff' ?>;
  }

  .overage {
    color: <?php echo (get_option('evtxco')) ? get_option('evtxco') : '#fff' ?>;
  }

  .overage .atime {
    border-bottom: 1px dashed <?php echo (get_option('evdtco')) ? get_option('evdtco') : '#fff' ?>;
  }

  .overage .age-info .agedate {
    color: <?php echo (get_option('evdtco')) ? get_option('evdtco') : '#fff' ?>;
  }

  .overage .age-info .agemon {
    color: <?php echo (get_option('evmoco')) ? get_option('evmoco') : '#fff' ?>;
  }

  .overage .atime .wakt {
    background: <?php echo (get_option('evtimbg')) ? get_option('evtimbg') : '#036' ?>;
    color: <?php echo (get_option('evtimco')) ? get_option('evtimco') : '#fff' ?>;
  }

  .overage .atime .wakt:before {
    border-right: 8px solid <?php echo (get_option('evtimbg')) ? get_option('evtimbg') : '#036' ?>;
  }

  .overage .atime .wakt:after {
    border-left: 8px solid <?php echo (get_option('evtimbg')) ? get_option('evtimbg') : '#036' ?>;
  }

  .overage .atime h3 a {
    color: <?php echo (get_option('evttlco')) ? get_option('evttlco') : '#fff' ?>;
  }

  .overage .days,
  .overage .hours,
  .overage .minutes {
    background: <?php echo (get_option('countbg')) ? get_option('countbg') : '#036' ?>;
    color: <?php echo (get_option('countco')) ? get_option('countco') : '#fff' ?>;
  }

  .overage .seconds {
    background: <?php echo (get_option('secbg')) ? get_option('secbg') : '#f0ca30' ?>;
    color: <?php echo (get_option('secco')) ? get_option('secco') : '#036' ?>;
  }

  #alert {
    background: <?php echo (get_option('gallbg')) ? get_option('gallbg') : '#fff' ?>;
  }

  .eiginn:hover .ovlay {
    color: <?php echo (get_option('gallco')) ? get_option('gallco') : '#fff' ?>;
    background: <?php echo (get_option('ovgallbg')) ? get_option('ovgallbg') : '#036' ?>;
  }

  .eiginn:hover .jamz {
    color: <?php echo (get_option('gallco')) ? get_option('gallco') : '#fff' ?>;
  }

  .jamz:after {
    border-bottom: 2px solid <?php echo (get_option('gallak')) ? get_option('gallak') : '#fc0' ?>;
  }

  .eiginn:hover .gspan a {
    color: <?php echo (get_option('gallco')) ? get_option('gallco') : '#fff' ?>;
  }


  .maquotes .overback {
    background: <?php echo (get_option('quotebg')) ? get_option('quotebg') : '#036' ?>;
  }

  .overback h4 {
    color: <?php echo (get_option('quheadco')) ? get_option('quheadco') : '#f0ca30' ?>;
  }

  #qslider .post {
    color: <?php echo (get_option('quteco')) ? get_option('quteco') : '#f0ca30' ?>;
  }

  #qslider .post em {
    color: <?php echo (get_option('qunaco')) ? get_option('qunaco') : '#fff' ?>;
  }

  .secblock {
    background: <?php echo (get_option('eeeeee')) ? get_option('eeeeee') : '#fff' ?>;
    color: <?php echo (get_option('guteco')) ? get_option('guteco') : '#036' ?>;
  }

  .guruloop h3.fopen {
    color: <?php echo (get_option('guheadco')) ? get_option('guheadco') : '#036' ?>;
  }

  .guruloop h3.fopen:before {
    border-top: 3px solid <?php echo (get_option('guakco')) ? get_option('guakco') : '#f3a331' ?>;
  }

  .ngurus {
    background: <?php echo (get_option('gunabg')) ? get_option('gunabg') : '#f0ca30' ?>;
    color: <?php echo (get_option('gunaco')) ? get_option('gunaco') : '#036' ?>;
  }

  .ngurus:after {
    border-left: 10px solid <?php echo (get_option('gunabg')) ? get_option('gunabg') : '#f0ca30' ?>;
  }

  .grthumb {
    border: 10px solid <?php echo (get_option('guphobg')) ? get_option('guphobg') : '#fff' ?>;
    box-shadow: 0 0 5px <?php echo (get_option('gushabg')) ? get_option('gushabg') : '#ccc' ?>;
  }

  .madings .post-meta h1 {
    color: <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#1f5e9e' ?>;
  }

  .post-content h1,
  .post-content h2,
  .post-content h3,
  .post-content h4,
  .post-content h5 {
    color: <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#1f5e9e' ?>;
  }

  .post-content .post-img img,
  .rside .imgloop {
    border-bottom: 3px solid <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#1f5e9e' ?>;
  }

  .madings .post-meta h1.alwnor {
    color: <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#1f5e9e' ?>;
  }

  .podate .ddays {
    background: <?php echo (get_option('pcdtbg')) ? get_option('pcdtbg') : '#1f5e9e' ?>;
    color: <?php echo (get_option('pcdtco')) ? get_option('pcdtco') : '#fff' ?>;
    border: 10px solid <?php echo (get_option('pcdabo')) ? get_option('pcdabo') : '#fff' ?>;
    box-shadow: 0 0 10px <?php echo (get_option('pcdash')) ? get_option('pcdash') : '#d7d7d7' ?>;
  }

  .govlay h2 a {
    color: <?php echo (get_option('titinco')) ? get_option('titinco') : '#fff' ?>;
  }

  .govlay span {
    color: <?php echo (get_option('titinco')) ? get_option('titinco') : '#fff' ?>;
  }

  .coms .countcoms {
    color: <?php echo (get_option('pcdtco')) ? get_option('pcdtco') : '#fff' ?>;
  }

  .podate .fa-comment {
    color: <?php echo (get_option('pcdtbg')) ? get_option('pcdtbg') : '#1f5e9e' ?>;
  }

  .madings .post-footer a {
    background: <?php echo (get_option('tagsbg')) ? get_option('tagsbg') : '#036' ?>;
    color: <?php echo (get_option('tagsco')) ? get_option('tagsco') : '#fff' ?>;
  }

  #submit {
    background: <?php echo (get_option('tagsbg')) ? get_option('tagsbg') : '#036' ?>;
    color: <?php echo (get_option('tagsco')) ? get_option('tagsco') : '#fff' ?>;
  }

  .list .post .post-category span.blogloop,
  .list .post .post-category a {
    background: <?php echo (get_option('tagsbg')) ? get_option('tagsbg') : '#036' ?>;
    color: <?php echo (get_option('tagsco')) ? get_option('tagsco') : '#fff' ?>;
  }

  .single .podate .ag.fa {
    color: <?php echo (get_option('tagsbg')) ? get_option('tagsbg') : '#036' ?>;
  }


  .bcovlay {
    background: linear-gradient(rgba(<?php echo (get_option('poevbg')) ? '' . $ag . ',' . $ge . ',' . $en . '' : '0, 0, 0' ?>, 1), rgba(<?php echo (get_option('poevbg')) ? '' . $ag . ',' . $ge . ',' . $en . '' : '0, 0, 0' ?>, 0));
  }

  .age-info .agedate {
    color: <?php echo (get_option('devco')) ? get_option('devco') : '#fff' ?>;
  }

  .agemon {
    color: <?php echo (get_option('devco')) ? get_option('devco') : '#fff' ?>;
  }

  .atime .wakt {
    background: <?php echo (get_option('tevbg')) ? get_option('tevbg') : '#036' ?>;
    color: <?php echo (get_option('tevco')) ? get_option('tevco') : '#fff' ?>;
  }

  .atime .wakt:before {
    border-right: 8px solid <?php echo (get_option('tevbg')) ? get_option('tevbg') : '#036' ?>;
  }

  .atime .wakt:after {
    border-left: 8px solid <?php echo (get_option('tevbg')) ? get_option('tevbg') : '#036' ?>;
  }

  .cogen .titloc {
    color: <?php echo (get_option('texevco')) ? get_option('texevco') : '#fff' ?> !important;
  }

  .days,
  .hours,
  .minutes {
    background: <?php echo (get_option('pevcoubg')) ? get_option('pevcoubg') : '#036' ?>;
    color: <?php echo (get_option('pevcouco')) ? get_option('pevcouco') : '#fff' ?>;
  }

  .seconds {
    background: <?php echo (get_option('pesecbg')) ? get_option('pesecbg') : '#036' ?>;
    color: <?php echo (get_option('pesecco')) ? get_option('pesecco') : '#fff' ?>;
  }

  .pagination a:hover,
  .pagination a.active {
    border: 1px solid <?php echo (get_option('inbg')) ? get_option('inbg') : '#003366' ?>;
    color: <?php echo (get_option('inco')) ? get_option('inco') : '#f0ca30' ?>;
    background: <?php echo (get_option('inbg')) ? get_option('inbg') : '#003366' ?>;
  }

  .pagination a,
  .pagination .disabled {
    border: 1px solid <?php echo (get_option('inco')) ? get_option('inco') : '#f0ca30' ?>;
    color: <?php echo (get_option('inbg')) ? get_option('inbg') : '#003366' ?>;
    background: <?php echo (get_option('inco')) ? get_option('inco') : '#f0ca30' ?>;
  }

  .breadcrumbs {
    color: <?php echo (get_option('brdco')) ? get_option('brdco') : '#333333' ?>;
    background: <?php echo (get_option('brdbg')) ? get_option('brdbg') : '#fff' ?>;
  }

  .breadcrumbs a {
    color: <?php echo (get_option('brdlico')) ? get_option('brdlico') : '#1f5e9e' ?>;
  }

  .sidebar {
    color: <?php echo (get_option('sdtxco')) ? get_option('sdtxco') : '#555' ?>;
  }

  .widget a,
  .widget-small a {
    color: <?php echo (get_option('sdlkco')) ? get_option('sdlkco') : '#036' ?>;
  }

  .widget h3,
  .widget-small h3,
  .widget h3 a,
  .widget-small h3 a {
    color: <?php echo (get_option('sdheadbg')) ? get_option('sdheadbg') : '#1f5e9e' ?>;
  }

  .widget .widmading {
    border-bottom: 1px dashed <?php echo (get_option('sdborbg')) ? get_option('sdborbg') : '#ddd' ?>;
  }

  #sidebar .search_form fieldset {
    border: 1px solid <?php echo (get_option('sdborbg')) ? get_option('sdborbg') : '#ddd' ?>;
  }

  .widget .tagcloud a {
    background: <?php echo (get_option('tagsbg')) ? get_option('tagsbg') : '#036' ?>;
    color: <?php echo (get_option('tagsco')) ? get_option('tagsco') : '#fff' ?>;
  }

  .widget .widmading .post-content h4 {
    color: <?php echo (get_option('sdtxco')) ? get_option('sdtxco') : '#555' ?>;
  }

  .widget li,
  .widget-small li {
    color: <?php echo (get_option('sdtxco')) ? get_option('sdtxco') : '#667' ?>;
    border-bottom: 1px dashed <?php echo (get_option('sdborbg')) ? get_option('sdborbg') : '#ddd' ?>;
  }

  .widget .rpthumb-date {
    color: <?php echo (get_option('sdtxco')) ? get_option('sdtxco') : '#555' ?>;
  }

  .widget select {
    border: 1px dashed <?php echo (get_option('sdborbg')) ? get_option('sdborbg') : '#ddd' ?>;
  }

  .widget .widmading .post-content {
    color: <?php echo (get_option('sdtxco')) ? get_option('sdtxco') : '#555' ?>;
    border-bottom: 1px dashed <?php echo (get_option('sdborbg')) ? get_option('sdborbg') : '#ddd' ?>;
  }

  .widget .agedate {
    color: <?php echo (get_option('sddtco')) ? get_option('sddtco') : '#fff' ?>;
    background: <?php echo (get_option('sddtbg')) ? get_option('sddtbg') : '#036' ?>;
  }

  .widget .age-info .agemon {
    color: <?php echo (get_option('sdmtco')) ? get_option('sdmtco') : '#fff' ?>;
    background: <?php echo (get_option('sdmtbg')) ? get_option('sdmtbg') : '#036' ?>;
  }

  .sidebar .atime .wakt {
    background: <?php echo (get_option('sdtevbg')) ? get_option('sdtevbg') : '#036' ?>;
    color: <?php echo (get_option('sdtevco')) ? get_option('sdtevco') : '#fff' ?>;
  }

  .sidebar .atime .wakt:before {
    border-right: 8px solid <?php echo (get_option('sdtevbg')) ? get_option('sdtevbg') : '#036' ?>;
  }

  .sidebar .atime .wakt:after {
    border-left: 8px solid <?php echo (get_option('sdtevbg')) ? get_option('sdtevbg') : '#036' ?>;
  }

  .footbar {
    background: <?php echo (get_option('footbg')) ? get_option('footbg') : '#036' ?>;
  }

  .foot-inn {
    background: <?php echo (get_option('footbg')) ? get_option('footbg') : '#036' ?>;
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
  }

  .foot-inn .widget a,
  .widget-small a {
    color: <?php echo (get_option('footbarlkco')) ? get_option('footbarlkco') : '#fff' ?>;
  }

  .foot-inn .widget .rpthumb-date {
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
  }

  .foot-inn .rpthumb img {
    background: <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#ddd' ?>;
  }

  .foot-inn .widget h3,
  .widget-small h3,
  .foot-inn .widget h3 a,
  .widget-small h3 a {
    color: <?php echo (get_option('fosdheadbg')) ? get_option('fosdheadbg') : '#fff' ?>;
  }

  .foot-inn .widget_gurus.widget .pgtk {
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
    border-bottom: 1px solid <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
  }

  .foot-inn .widget .calendar_wrap th,
  .foot-inn .widget .calendar_wrap td {
    border: 1px solid <?php echo (get_option('footbg')) ? get_option('footbg') : '#036' ?>;
    background: <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
    ;
  }

  .foot-inn .widget .widmading {
    border-bottom: 1px dashed <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
  }

  .foot-inn .search_form fieldset {
    border: 1px solid <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
  }

  .foot-inn .widget .tagcloud a {
    background: <?php echo (get_option('inbg')) ? get_option('inbg') : '#036' ?>;
    color: <?php echo (get_option('inco')) ? get_option('inco') : '#fff' ?>;
  }

  .foot-inn .widget .widmading .post-content h4 {
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
  }

  .foot-inn .search_form button {
    background: <?php echo (get_option('footbg')) ? get_option('footbg') : '#036' ?>;
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
  }

  .foot-inn .widget li,
  .widget-small li {
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#667' ?>;
    border-bottom: 1px dashed <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
  }

  .foot-inn .widget select {
    border: 1px solid <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
    background: <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#ffffff' ?>;
  }

  .foot-inn .widget .calendar_wrap td a {
    color: <?php echo (get_option('footbarlkco')) ? get_option('footbarlkco') : '#fff' ?>;
  }

  .foot-inn .widget .widmading .post-content {
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#555' ?>;
    border-bottom: 1px dashed <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#085387' ?>;
  }

  .foot-inn .search_form fieldset {
    background: <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#094e7d' ?>;
  }

  .foot-inn .search_form input {
    background: <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#094e7d' ?>;
    border-bottom: 1px solid <?php echo (get_option('fosdborbg')) ? get_option('fosdborbg') : '#094e7d' ?>;
    color: <?php echo (get_option('footbartco')) ? get_option('footbartco') : '#fff' ?>;
  }

  .foot-inn .widget .agedate {
    color: <?php echo (get_option('fosddtco')) ? get_option('fosddtco') : '#036' ?>;
    background: <?php echo (get_option('fosddtbg')) ? get_option('fosddtbg') : '#eee' ?>;
  }

  .foot-inn .widget .age-info .agemon {
    color: <?php echo (get_option('fosdmtco')) ? get_option('fosdmtco') : '#036' ?>;
    background: <?php echo (get_option('fosdmtbg')) ? get_option('fosdmtbg') : '#fff' ?>;
  }

  .foot-inn .atime .wakt {
    background: <?php echo (get_option('fosdtevbg')) ? get_option('fosdtevbg') : '#036' ?>;
    color: <?php echo (get_option('fosdtevco')) ? get_option('fosdtevco') : '#fff' ?>;
  }

  .foot-inn .atime .wakt:before {
    border-right: 8px solid <?php echo (get_option('fosdtevbg')) ? get_option('fosdtevbg') : '#036' ?>;
  }

  .foot-inn .atime .wakt:after {
    border-left: 8px solid <?php echo (get_option('fosdtevbg')) ? get_option('fosdtevbg') : '#036' ?>;
  }

  .footer {
    background: <?php echo (get_option('footerbg')) ? get_option('footerbg') : '#036' ?>;
  }

  .copyright {
    color: <?php echo (get_option('ftexco')) ? get_option('ftexco') : '#fff' ?>;
  }

  .footer a {
    color: <?php echo (get_option('flinkco')) ? get_option('flinkco') : '#fc0' ?>;
  }

  #return-to-top {
    color: <?php echo (get_option('totopco')) ? get_option('totopco') : '#036' ?>;
    background: <?php echo (get_option('totopbg')) ? get_option('totopbg') : '#f0ca30' ?>;
  }

  #return-to-top:hover {
    color: <?php echo (get_option('totopbg')) ? get_option('totopbg') : '#036' ?>;
    background: <?php echo (get_option('totopco')) ? get_option('totopco') : '#f0ca30' ?>;
  }




  .mobi {
    background: <?php echo (get_option('smbg')) ? get_option('smbg') : '#036' ?>;
  }

  .mobi .accordion li {
    border-bottom: 1px solid <?php echo (get_option('smbg')) ? get_option('smbg') : '#003366' ?>;
  }

  .mobi .accordion li a {
    color: <?php echo (get_option('smco')) ? get_option('smco') : '#fff' ?>;
  }

  .mobi .accordion li ul {
    border-top: 1px solid <?php echo (get_option('smbg')) ? get_option('smbg') : '#003366' ?>;
    background: <?php echo (get_option('smbg')) ? get_option('smbg') : '#003366' ?>;
  }

  .mobi .accordion li ul li ul {
    background: <?php echo (get_option('smbg')) ? get_option('smbg') : '#10588a' ?>;
  }

  .pead {
    padding: 4px 4px 10px;
  }


  .comments h3 {
    color: <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#4a9c6e' ?>;
  }

  .comments a {
    color: <?php echo (get_option('pcheadco')) ? get_option('pcheadco') : '#4a9c6e' ?>;
  }

  .share .fa-facebook-f {
    background: #036;
  }

  .share .fa-x-twitter {
    background: #222;
  }

  .share .fa-whatsapp {
    background: #090;
  }

  .share .fa-telegram {
    background: #49AAD9;
  }

  .dmaps #googleMap {
    height: <?php echo (get_option('mheight')) ? get_option('mheight') : '300px' ?>;
  }

  @media screen and (max-width: 640px) {

    .home .fixed .nav-inn,
    .home .nofixed .nav-inn {
      background: <?php echo (get_option('headbg')) ? get_option('headbg') : '#fff' ?>;
    }
  }
</style>