<?php
header('Content-type: text/xml');
function sitemapBuilder($pages) {
	$baseurl = $_SERVER['HTTP_HOST'];
	$xmlblock = "";
	$xmlblock .= '<?xml version="1.0" encoding="utf-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	$xmlblock .= "<url>
		<loc>http://".$baseurl."/</loc>
		<lastmod>".date('Y-m-d')."</lastmod>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
	</url>";

	foreach ($pages['mainlinks'] as $link) :
		$xmlblock .= "<url>
			<loc>http://".$baseurl."/".$link['slug']."/</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	endforeach;

	$xmlblock .= '</urlset>';

	return $xmlblock;
}
$sitemap = sitemapBuilder($data['pages']);
echo $sitemap;
