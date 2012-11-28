    <?php /** Site Meta **/ ?>
    <meta name="viewport" content="initial-scale=1" />
    
    <meta name="keywords" content="<?php echo KEYWORDS; ?>" />
    <meta name="robots" content="<?php echo ROBOTS; ?>" />
    <meta name="author" lang="" content="<?php echo AUTHOR; ?>" />
    <meta name="generator" content="<?php echo GENERATOR; ?>" />
    <meta name="google-site-verification" content="<?php echo GOOGLE_SITES; ?>" />
    <meta property="fb:admins" content="<?php echo FB_ADMIN_ID; ?>"/>
    <meta property="og:type" content="<?php echo OG_TYPE; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php /** Custum HEAD **/ 
    require(INCLUDES.'default/meta-tags.php');
    
    if(file_exists(INCLUDES.'meta-tags/'.URL_VALUE.'.php')):
    	require(INCLUDES.'meta-tags/'.URL_VALUE.'.php');
    endif;
    
    ?>