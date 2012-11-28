	<div class="page-header">
			<h2>Edit files</h2>
		</div>
		<ul>
			<li>files/config/connect.php for MySQL configuration</li>
			<li>files/config/define.php for EWK configuration</li>
			<li>yours files into files folder</li>
		</ul>
		
		<div class="page-header">
			<h2>Testing functions</h2>
		</div>
		
		<pre>
		<?php 
			

		 ?>
		</pre>
		<div class="page-header">
			<h2>Testing configuration</h2>
		</div>
		<table class="table">
			<th>
				<td colspan="2"><h4><strong>Custum constants</strong></h4></td>
			</th>
			<tr><td>TEST</td><td><?php echo @ewk::test_var(TEST); ?></td></tr>
			<tr><td>LANGS</td><td><?php define('LANGS', 'sdf'); echo @ewk::test_var(LANGS); ?></td></tr>
			<tr><td>LANG</td><td><?php echo @ewk::test_var(LANG); ?></td></tr>
			<tr><td>NAME</td><td><?php echo @ewk::test_var(NAME); ?></td></tr>
			<tr><td>CSS</td><td><?php echo @ewk::test_var(CSS); ?></td></tr>
			<tr><td>JS</td><td><?php echo @ewk::test_var(JS); ?></td></tr>
			<tr><td>ANALYTICS</td><td><?php echo @ewk::test_var(ANALYTICS); ?></td></tr>
			<tr><td>BOOTSTRAP</td><td><?php echo @ewk::test_var(BOOTSTRAP); ?></td></tr>
			<tr><td>BOOTSTRAP_RESPONSIVE</td><td><?php echo @ewk::test_var(BOOTSTRAP_RESPONSIVE); ?></td></tr>
			<tr><td>BOOTSTRAP_JS</td><td><?php echo @ewk::test_var(BOOTSTRAP_JS); ?></td></tr>
			<tr><td>JQUERY</td><td><?php echo @ewk::test_var(JQUERY); ?></td></tr>
			<tr><td>ZOOMBOX</td><td><?php echo @ewk::test_var(ZOOMBOX); ?></td></tr>
			<tr><td>HTML5_JS_FOR_IE</td><td><?php echo @ewk::test_var(HTML5_JS_FOR_IE); ?></td></tr>
			<tr><td>COPYRIGHT</td><td><?php echo @ewk::test_var(COPYRIGHT); ?></td></tr>
			<tr><td>AUTHOR</td><td><?php echo @ewk::test_var(AUTHOR); ?></td></tr>
			<tr><td>EMAIL</td><td><?php echo @ewk::test_var(EMAIL); ?></td></tr>
			<tr><td>TWITTER_USER</td><td><?php echo @ewk::test_var(TWITTER_USER); ?></td></tr>
			<tr><td>TEXTE_TO_TWEET</td><td><?php echo @ewk::test_var(TEXTE_TO_TWEET); ?></td></tr>
			
			
			<th>
				<td colspan="2"><h4><strong>MySQL constants</strong></h4></td>
			</th>
			<tr><td>HOST</td><td><?php echo @ewk::test_var(HOST); ?></td></tr>
			<tr><td>DBNAME</td><td><?php echo @ewk::test_var(DBNAME); ?></td></tr>
			<tr><td>USER</td><td><?php echo @ewk::test_var(USER); ?></td></tr>
			<tr><td>PASSWORD</td><td><?php echo @ewk::test_var(PASSWORD); ?></td></tr>
			<th>
				<td colspan="2"><h4><strong>EWK constants</strong></h4></td>
			</th>
			<tr><td>PARAMETRE_1</td><td><?php echo @ewk::test_var(PARAMETRE_1); ?></td></tr>
			<tr><td>PARAMETRE_2</td><td><?php echo @ewk::test_var(PARAMETRE_2); ?></td></tr>
			<tr><td>PARAMETRE_3</td><td><?php echo @ewk::test_var(PARAMETRE_3); ?></td></tr>
			<tr><td>PARAMETRE_4</td><td><?php echo @ewk::test_var(PARAMETRE_4); ?></td></tr>
			<tr><td>URL</td><td><?php echo @ewk::test_var(URL); ?></td></tr>
			<tr><td>HOST</td><td><?php echo @ewk::test_var(HOST); ?></td></tr>
			<tr><td>INCLUDES</td><td><?php echo @ewk::test_var(INCLUDES); ?></td></tr>
			<tr><td>Icons</td><td><i class="icon-ok"></i></td></tr>
			<tr><td>EWK_CONNECT</td><td><?php echo @ewk::test_var($_COOKIE['EWK_CONNECT']); ?></td></tr>
		</table>
	</div>
