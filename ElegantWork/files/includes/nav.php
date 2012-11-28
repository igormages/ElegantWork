<?php /** Custum NAV **/
	if(!$welcome):
		require(INCLUDES.'default/nav.php');
	else:
?>
	<header>
	    <div class="container">
	    	<div class="row">
	    		<div class="span12" id="header">
		    		<img src="<?php echo URL; ?>ElegantWork/docs/ElegantWork-mini.png" alt="ElegantWork" class="logo"/>
	    		</div>
	    	</div>
	    </div>
	</header>

    <div class="container">
<?php endif; ?>