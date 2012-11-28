<?php 

    session_start();
    
    header('Content-Type: text/html; charset=UTF-8');
    
	/** ElegantWork constants **/
	define('DS',DIRECTORY_SEPARATOR);
	if(isset($_GET['parametre_1']) AND !empty($_GET['parametre_1'])) define('PARAMETRE_1', $_GET['parametre_1']);
	if(isset($_GET['parametre_2']) AND !empty($_GET['parametre_2'])) define('PARAMETRE_2', $_GET['parametre_2']);
	if(isset($_GET['parametre_3']) AND !empty($_GET['parametre_3'])) define('PARAMETRE_3', $_GET['parametre_3']);
	if(isset($_GET['parametre_4']) AND !empty($_GET['parametre_4'])) define('PARAMETRE_4', $_GET['parametre_4']);
	$s = (isset($_SERVER['HTTPS'])) ? 's' : '';
	
    define('URL', 'http'.$s.'://'.$_SERVER['HTTP_HOST'].DS);
    define('CORE','ElegantWork'.DS.'files'.DS.'php'.DS);
    define('EWK','ElegantWork'.DS.'files'.DS);
    define('INCLUDES', 'files'.DS);
    define('SRC', URL.'files'.DS);
    $url = (isset ($_GET['parametre_1'])) ? str_replace('index.php', 'index', PARAMETRE_1) : 'index';
    define('URL_VALUE', $url);
    
    
    define('PAGE', INCLUDES.'pages'.DS.  str_replace(DS, '', URL_VALUE).'.php');
    define('URL_FINALE',  str_replace('index','',URL.URL_VALUE));
    define('URL_FILES', URL.'ElegantWork'.DS.'files'.DS);
    
	$welcome = (!file_exists(INCLUDES.'pages/index.php')) ? TRUE : FALSE;
	
    if(!file_exists(PAGE) AND URL_VALUE != 'index' AND URL_VALUE != 'sitemap.xml'):
        header("HTTP/1.0 404 Not Found");
    endif;
    
    /** ElegantWork Optional Configurations **/
    require CORE.'define.php';
    require INCLUDES.'config/define.php';
    
    
    require CORE.'connect.php';
    
    require CORE.'functions.php';
    require CORE.'elegantwork.functions.php';
    
    require INCLUDES.'php/functions.php';
    
    if(file_exists(INCLUDES.'php/'.URL_VALUE.'.php')):
    	require(INCLUDES.'php/'.URL_VALUE.'.php');
    endif;
    if($_SERVER['REQUEST_METHOD']== 'POST' AND file_exists(INCLUDES.'post/'.URL_VALUE.'.php')):
    	require(INCLUDES.'post/'.URL_VALUE.'.php');
    endif;
    
    if(URL_VALUE != 'sitemap.xml'):
	    require EWK.'includes/header.php'; 
	    require EWK.'includes/meta-tags.php'; 
	    echo '</head><body>';
	    require EWK.'includes/nav.php';
    endif;
        
        if(file_exists(PAGE)):
        	if(array_search(URL_VALUE, $secure)!=FALSE AND $_COOKIE['EWK_CONNECT'] == 'CONNECTED'):
	            require PAGE;
        	elseif(array_search(URL_VALUE, $secure)!= FALSE AND $_COOKIE['EWK_CONNECT'] != 'CONNECTED'):
	            require INCLUDES.'default/not-connected.php';
            elseif(array_search(URL_VALUE, $secure) === FALSE):
	            require PAGE;
            endif;
        elseif(URL_VALUE == 'index' AND !file_exists(PAGE)):
	        	require CORE.'ewk.welcome.php';
        elseif(!file_exists(PAGE) AND URL_VALUE != 'sitemap.xml'):
            require INCLUDES.'default/404.php';
        elseif(URL_VALUE == 'sitemap.xml'):
        	require INCLUDES.'seo/sitemap.xml.php';
        endif;

    if(URL_VALUE != 'sitemap.xml'):
	    require EWK.'includes/footer.php';
    endif;