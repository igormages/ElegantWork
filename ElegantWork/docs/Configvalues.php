<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Configuring EwK</h1>
			<p>To configure EwK you need to change these constants values</p>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Constant name</th>
				<th>Values</th>
				<th>Example</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td><code>MYSQL</code></td>
				<td>Switch <code>On</code> or <code>Off</code> MySQL</td>
				<td><code>On</code></td>
				<td>Edit constants into <pre>files/config/connect.php</pre></td>
			</tr>
			<tr>
				<td><code>HOST</code></td>
				<td>Set the MySQL Host</td>
				<td><code>localhost</code></td>
				<td>Edit constants into <pre>files/config/connect.php</pre></td>
			</tr>
			<tr>
				<td><code>DBNAME</code></td>
				<td>Set the database name</td>
				<td><code>elegantwork</code></td>
				<td>Edit constants into <pre>files/config/connect.php</pre></td>
			</tr>
			<tr>
				<td><code>USER</code></td>
				<td>Set the MySQL user name</td>
				<td><code>root</code></td>
				<td>Edit constants into <pre>files/config/connect.php</pre></td>
			</tr>
			<tr>
				<td><code>PASSWORD</code></td>
				<td>Set the MySQL password</td>
				<td><code>password</code></td>
				<td>Edit constants into <pre>files/config/connect.php</pre></td>
			</tr>
			<tr>
				<td><code>LANG</code></td>
				<td>Lang of the web site,</td>
				<td><code>en-US</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>NAME</code></td>
				<td>Name of your web site</td>
				<td><code>ElegantWork</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>CSS</code></td>
				<td>Name of your main CSS file, will be added to all pages</td>
				<td><code>style.css</code></td>
				<td>Put the css file into
					<pre>files/css/</pre>
				</td>
			</tr>
			<tr>
				<td><code>JS</code></td>
				<td>Name of your main JS file, will be added to all pages</td>
				<td><code>script.js</code></td>
				<td>Put the css file into
					<pre>files/js/</pre>
				</td>
			</tr>
			<tr>
				<td><code>ANALYTICS</code></td>
				<td>Google Analytics Account ID</td>
				<td><code>UA-34139544-1</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>BOOTSTRAP</code></td>
				<td>Switch <code>On</code> or <code>Off</code> <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>BOOTSTRAP_RESPONSIVE</code></td>
				<td>Switch <code>On</code> or <code>Off</code> <a href="http://getbootstrap.com/" target="_blank">Bootstrap Responsive</a></td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>BOOTSTRAP_JS</code></td>
				<td>Switch <code>On</code> or <code>Off</code> <a href="http://getbootstrap.com/" target="_blank">Bootstrap JavaScript</a></td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>JQUERY</code></td>
				<td>Switch <code>On</code> or <code>Off</code> <a href="http://jquery.com/" target="_blank">Jquery</a></td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>ZOOMBOX</code></td>
				<td>Switch <code>On</code> or <code>Off</code> <a href="http://grafikart.github.com/Zoombox/index.html" target="_blank">Zoombox</a></td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>HTML5_JS_FOR_IE</code></td>
				<td>Switch <code>On</code> or <code>Off</code> HTML5 structure for Internet Explorer</td>
				<td><code>On</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>ICONS</code></td>
				<td>Switch <code>On</code> or <code>Off</code> Icons</td>
				<td><code>On</code></td>
				<td>Put icons files into
					<pre>files/images/</pre>
					EwK need these files:
					<ul>
						<li>favicon-72px.png</li>
						<li>favicon-114px.png</li>
						<li>favicon.png</li>
						<li>favicon.ico</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td><code>COPYRIGHT</code></td>
				<td>Set the meta Copyright value</td>
				<td><code>Igor Magès</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>AUTHOR</code></td>
				<td>Set the meta Author value</td>
				<td><code>Igor Magès</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>ROBOTS</code></td>
				<td>Set the meta robots value</td>
				<td><code>index,follow</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>KEYWORDS</code></td>
				<td>Set the meta Keywords value</td>
				<td><code>Ewk, ElegantWork</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>GOOGLE_SITES</code></td>
				<td>Set the meta google site value from <a href="https://www.google.com/webmasters/tools/" target="_blank">Google Webmaster Tools</a></td>
				<td><code>OdhX2PGBVS1hSqzIf1T</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>EMAIL</code></td>
				<td>Set the a defaut sender e-mail from the web site</td>
				<td><code>igor@mages.pro</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>FB_ADMIN_ID</code></td>
				<td>Set the a Facebook Admin User ID</td>
				<td><code>1593254885</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>OG_TYPE</code></td>
				<td>Set the a Facebook OG type</td>
				<td><code>website</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>TWITTER_USER</code></td>
				<td>Set the default Twitter User</td>
				<td><code>igor_mages</code></td>
				<td></td>
			</tr>
			<tr>
				<td><code>TEXTE_TO_TWEET</code></td>
				<td>Set the default message to tweet</td>
				<td><code>via @igor_mages</code></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>
