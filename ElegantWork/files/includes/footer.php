
<?php /** Custum NAV **/
	require(INCLUDES.'default/footer.php');
?>
 <?php if(HTML5_JS_FOR_IE == 'On'): ?>   <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php endif; ?>
    
<?php if(JQUERY == 'On'): ?><script src="<?php echo URL_FILES.'js'.DS.'jquery.js'; ?>" ></script><?php endif; ?>
<?php if(BOOTSTRAP_JS == 'On'): ?><script src="<?php echo URL_FILES.'js'.DS.'bootstrap.min.js'; ?>" ></script><?php endif; ?>
<?php if(ZOOMBOX == 'On'): ?><script src="<?php echo URL_FILES.'js'.DS.'zoombox.js'; ?>" ></script><?php endif; ?>
<?php if(JS != ''): ?><script src="<?php echo SRC.'js'.DS.JS; ?>" ></script><?php endif; ?>
<?php if($welcome): ?>
	<link href="<?php echo URL_FILES.'css/ewk.welcome.css'; ?>" rel="stylesheet">
	<script src="<?php echo URL_FILES.'js/ewk.welcome.js'; ?>" ></script>
<?php endif; ?>
<?php
    if(file_exists(INCLUDES.'js/'.URL_VALUE.'.js')): ?>
    	<script src="<?php echo (SRC.'js/'.URL_VALUE.'.js'); ?>" ></script>
    	<?php
    endif;
    ?>
<?php if(ANALYTICS != ''): ?>
	<script type="text/javascript">
	
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo ANALYTICS; ?>']);
	_gaq.push(['_setDomainName', '<?php echo $_SERVER['HTTP_HOST']; ?>']);
	_gaq.push(['_trackPageview']);
	
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	
	</script>
<?php endif; ?>
</div>
</body>
</html>