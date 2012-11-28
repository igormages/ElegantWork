<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
  <head>
    <meta charset="utf-8">
    
    <?php /** CSS **/ ?>
    <?php if(ZOOMBOX == 'On'): ?><link rel="stylesheet" type="text/css" href="<?php echo URL_FILES.'css'.DS.'zoombox.css'; ?>" media="screen"/><?php endif; ?>
    <?php if(BOOTSTRAP == 'On'): ?><link href="<?php echo URL_FILES.'css'.DS; ?>bootstrap.min.css" rel="stylesheet"><?php endif; ?>
    <?php if(BOOTSTRAP_RESPONSIVE == 'On'): ?><link href="<?php echo URL_FILES.'css'.DS; ?>bootstrap-responsive.min.css" rel="stylesheet"><?php endif; ?>
    <?php if(CSS != ''): ?><link href="<?php echo SRC.'css'.DS.CSS; ?>" rel="stylesheet"><?php endif; ?>
    
    
    <?php /** ICONS **/ ?>
    <?php if(ICONS != ''): ?>
    <link rel="icon" type="image/png" href="<?php echo SRC.'images'.DS.'favicon.png'; ?>" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="<?php echo SRC.'images'.DS.'favicon.ico'; ?>" /><![endif]-->
    <link rel="shortcut icon" href="<?php echo SRC.'images'.DS.'favicon.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo SRC.'images'.DS.'favicon-114px.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo SRC.'images'.DS.'favicon-72px.png'; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo SRC.'images'.DS.'favicon.png'; ?>">
    <?php endif; ?>
    
    <?php /** Custum HEAD **/ 
    require(INCLUDES.'default/header.php');
    
    if(file_exists(INCLUDES.'css/'.URL_VALUE.'.css')): ?>
    	<link href="<?php echo (SRC.'css/'.URL_VALUE.'.css'); ?>" rel="stylesheet">
    	<?php
    endif;
    if($welcome):
		echo '<title>ElegantWork</title>
		<meta property="og:site_name" content="http://elegantwork.mages.pro/">
		<meta property="og:title" content="ElegantWork">
        <meta property="og:description" content="ElegantWork, alias EwK is a little helper for developers to be more efficient in the web developpement.">
        <meta property="og:url" content="http://elegantwork.mages.pro/">
        <meta property="og:image" content="http://elegantwork.mages.pro/files/images/favicon.png">';
	endif;
    ?>