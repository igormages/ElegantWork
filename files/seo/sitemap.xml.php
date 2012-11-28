<?php echo '<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="'.URL.'files/seo/sitemap.xsl"?>'; ?>
<sitemapindex
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 

<sitemap> 
	<loc><?php echo URL; ?></loc>
	<priority>1.00</priority>
	<changefreq>daily</changefreq>
	<lastmod><?php echo date('Y-m-d h:m'); ?></lastmod>
</sitemap>

</sitemapindex>