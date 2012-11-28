<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Getting started</h1>
		</div>
		<p>
			Install Ewk into your root '<em>/</em>' directory.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h2>Pages</h2>
		</div>
		<p>
			Create yours pages files into <code>files/pages/</code>. Set yours pages names like <code>mypage.php</code>.<br/> Then to see your page go to <code>http://yoursite.com/page</code>
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>CSS files</h3>
		</div>
		<p>
			You can choose to use a single css file on all pages, set the <code>CSS</code> constant into <code>files/config/define.php</code>
		</p>
		<p>
			So, you can add a specific CSS file to a specific page. Put a CSS file to the CSS folder with the name of your page to be automatically include.</p>
		<p>
			Eg.: My page name: page.php<br/>If you have a CSS file page.css into the CSS folder, ewk includes automatically.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>JS files</h3>
		</div>
		<p>
			You can choose to use a single JavaScript file on all pages, set the <code>JS</code> constant into <code>files/config/define.php</code>
		</p>
		<p>
			So, you can add a specific JS file to a specific page. Put a JS file to the JS folder with the name of your page to be automatically include.</p>
		<p>
			Eg.: My page name: page.php<br/>If you have a JS file page.js into the JS folder, ewk includes automatically.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>Meta tags</h3>
		</div>
		<p>
			You can choose to use the same meta tags on all pages, put your code into <code>files/default/meta-tags.php</code>
		</p>
		<p>
			So, you can add a specific meta tag to a specific page. Put a file into <code>files/meta-tags/</code> with yours meta-tags, pages titles...</p>
		<p>
			Eg.: My page name: page.php<br/>If you have a php file meta-tags.ph into the <em>meta-tags</em> folder, ewk includes automatically into the <code>&lsaquo;head&rsaquo;</code>.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>&lsaquo;head&rsaquo;&lsaquo;/head&rsaquo;</h3>
		</div>
		<p>
			You can add stuff into &lsaquo;head&rsaquo;&lsaquo;/head&rsaquo; editing <code>files/default/header.php</code>
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>&lsaquo;footer&rsaquo;&lsaquo;/footer&rsaquo;</h3>
		</div>
		<p>
			You can add stuff into &lsaquo;footer&rsaquo;&lsaquo;/footer&rsaquo; editing <code>files/default/footer.php</code>
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>&lsaquo;nav&rsaquo;&lsaquo;/nav&rsaquo;</h3>
		</div>
		<p>
			You can add a &lsaquo;nav&rsaquo;&lsaquo;/nav&rsaquo; or a header to all pages editing <code>files/default/nav.php</code>.
			The content will be added before <code>div.container</code>
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>404 page not found</h3>
		</div>
		<p>
			The 404 page is editable into <code>files/default/404.php</code>
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h3>Protected pages</h3>
		</div>
		<p>
			You can protect pages of your site. Put the pages name into the array <code>$secure</code> editing <code>files/config/define.php</code>
		</p>
		<p>
			To allow someone send the cookie <code>$_COOKIE['EWK_CONNECT']</code> like <code>'CONNECTED'</code>.
		</p>
		<p>
			You can edit the error page of not allowed connections. <code>files/default/not-connected.php</code>
		</p>
		<p>
			Let <code>'--'</code> value into the array.
		</p>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h2>SEO</h2>
		</div>
		<p>
			You can edit the dynamic <code>sitemap.xml</code> into <code>files/seo/sitemap.xml</code>.
		</p>
	</div>
</div>