<?php 
	/** ElegantWork Basic Configurations **/
	
	define('LANG', 'fr-FR');
	define('NAME', 'ElegantWork'); // Site name
	
	/** Advanced **/
	define('CSS', ''); // Main CSS name ex: style.css
	define('JS', ''); // Main JS name ex: scripts.js
	define('ANALYTICS', ''); // Google Analytics Account ID (e.g. UA-34139544-1)
	
	define('BOOTSTRAP', 'On'); // On or Off
	define('BOOTSTRAP_RESPONSIVE', 'On'); // On or Off
	define('BOOTSTRAP_JS', 'On'); // On or Off
	define('JQUERY', 'On'); // On or Off
	define('ZOOMBOX', 'On'); // On or Off
	define('HTML5_JS_FOR_IE', 'On'); // On or Off
	
	
	/** Aparence **/
	define('ICONS', 'On'); // On or Off
	
	/** Protected Pages **/
	$secure = array('--',
	'page',
	);
	
	/** GOOGLE **/
	define('COPYRIGHT', 'COPYRIGHTz');
	define('AUTHOR', 'AUTHORz');
	define('ROBOTS', 'index,follow');
	define('KEYWORDS', 'igor, mages, EWK, ElegantWork');
	define('GOOGLE_SITES', 'OdhX2PGBVS1hSqzIf1TfQZAcw44WYzsdazFzlm-1deg');
	
	/** Mailing **/
	define('EMAIL', 'igor@mages.pro');
	
	/** Facebook **/
	define('FB_ADMIN_ID', '1593254885');
	define('OG_TYPE', 'website');
	
	
	/** Twitter **/
	define('TWITTER_USER', 'igor_mages');
	define('TEXTE_TO_TWEET', 'via @igor_mages '.URL_FINALE);