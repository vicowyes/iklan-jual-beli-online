<?php
    $js_lang = array(
        'delete' => __('Delete', OSCLASSWIZARDS_THEME_FOLDER),
        'cancel' => __('Cancel', OSCLASSWIZARDS_THEME_FOLDER)
    );

    osc_enqueue_script('jquery');
    osc_enqueue_script('jquery-ui');
    osc_register_script('global-theme-js', osc_current_web_theme_js_url('global.js'), 'jquery');
    osc_register_script('delete-user-js', osc_current_web_theme_js_url('delete_user.js'), 'jquery-ui');
    osc_enqueue_script('global-theme-js');
	osc_enqueue_script('bootstrap-theme-js');
	osc_register_script('bootstrap-theme-js', osc_current_web_theme_js_url('bootstrap.min.js'), 'jquery');
	osc_enqueue_script('library-theme-js');
	osc_register_script('library-theme-js', osc_current_web_theme_js_url('library.js'), 'jquery');
?>
<!-- Markup microdata ditambahkan oleh Pemandu Markup Data Terstruktur Google. -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title><?php echo osc_esc_html(meta_title()) ; ?></title>
<?php if( meta_description() != '' ) { ?>
<meta name="description" content="<?php echo osc_esc_html(meta_description()); ?>" />
<?php } ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<!-- canonical -->
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<!-- /canonical -->
<?php } ?>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content=" oktober 2016/10/09 03:00:00 GMT" />
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="google-site-verification" content="CyoN1TmRmF1qzkJCh4czNp6ykMpfbaSKP9OXlGKJ154" />
<meta name="msvalidate.01" content="C1EAE125FD4843660DA1249FA4E4A967" />
<meta name="geo.placename" content="Indonesia"> 
<meta name="geo.country" content="ID">
<meta name="google" content="sitelinkssearchbox" />
<link rel="shortcut icon" href="<?php echo osclasswizards_favicon_url(); ?>" type="image/x-icon" />
<link rel="alternate" hreflang="id" href="https://www.iklanjualbelionline.com" />
<link href="https://plus.google.com/108675731883875524855" rel="publisher" />
<script type="text/javascript" async defer
  src="https://apis.google.com/js/platform.js?publisherid=108675731883875524855">
</script>

<meta property="og:title" content="Iklan Jual Beli Online">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.iklanjualbelionline.com">
<meta property="og:image" content="https://www.iklanjualbelionline.com/oc-content/uploads/banner.jpg">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:description" content="Iklanjualbelionline.com situs jual beli online di Indonesia, iklan jual beli mobil, motor, baju, handphone, komputer, elektronik, produk rumah tangga.">
<meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="542417792576047">

<script
  src="https://maps.googleapis.com/maps/api/js?callback=initMap&signed_in=true&key=AIzaSyC78LgdThvArBMTq9-1cQgNsCy3Bs2PFKk" async defer>
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<link href="<?php echo osc_current_web_theme_url('css/bootstrap.min.css') ; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo osc_current_web_theme_url('css/main.css') ; ?>" rel="stylesheet" type="text/css" />
<?php if(osc_get_preference('rtl_view', 'osclasswizards_theme') == "1") { ?>
<link href="<?php echo osc_current_web_theme_url('css/rtl.css') ; ?>" rel="stylesheet" type="text/css" />
<?php } ?>
<?php $color_mode = osclasswizards_theme_color_mode(); ?>
<link href="<?php echo osc_current_web_theme_url('css/apps-'.$color_mode.'.css') ; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo osc_current_web_theme_url('js/jquery-ui/jquery-ui-1.10.2.custom.min.css') ; ?>" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var osclasswizards = window.osclasswizards || {};
    osclasswizards.base_url = '<?php echo osc_base_url(true); ?>';
    osclasswizards.langs = <?php echo json_encode($js_lang); ?>;
    osclasswizards.fancybox_prev = '<?php echo osc_esc_js( __('Previous image',OSCLASSWIZARDS_THEME_FOLDER)) ?>';
    osclasswizards.fancybox_next = '<?php echo osc_esc_js( __('Next image',OSCLASSWIZARDS_THEME_FOLDER)) ?>';
    osclasswizards.fancybox_closeBtn = '<?php echo osc_esc_js( __('Close',OSCLASSWIZARDS_THEME_FOLDER)) ?>';
    osclasswizards.rtl_view = '<?php echo (osc_get_preference('rtl_view', 'osclasswizards_theme') == '1')? '1': '0'; ?>';
</script>
<!--Ie Js-->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php osc_run_hook('header') ; ?>
