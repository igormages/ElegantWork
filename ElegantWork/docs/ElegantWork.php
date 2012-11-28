<?php 
if(!defined('URL')) {
	$s = (isset($_SERVER['HTTPS'])) ? 's' : '';
	define('URL', 'http'.$s.'://'.$_SERVER['HTTP_HOST'].'/');
}
?>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>User's Manual</h1>
		</div>
		<p class="lead">
			ElegantWork, alias EwK is a little helper for developers to be more efficient in the web developpement.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<div class="page-header">
			<span class="lead">MVC structure</span>
		</div>
		<img src="<?php echo URL; ?>ElegantWork/docs/img/modele-vue-controleur.png" alt="Scheme of a MVC structure" title="MVC structure" />
	</div>
	<div class="span4">
		<div class="page-header">
			<span class="lead">Modular</span>
		</div>
		<img src="<?php echo URL; ?>ElegantWork/docs/img/modular.png" alt="Modular framework" title="Modular structure" />
	</div>
	<div class="span4">
		<div class="page-header">
			<span class="lead">Customizable</span>
		</div>
		<img src="<?php echo URL; ?>ElegantWork/docs/img/custom.png" alt="Customizable framework" title="Customizable framework" />
	</div>
</div>

<br/>
