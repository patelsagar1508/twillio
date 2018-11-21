<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'sitemap-generator.php';
$sitemap = new Sitemap('https://www.chiavarichairs.com/');	

$sitemap->setPath('sitemap/');

$sitemap->setFilename('customsitemap');

$sitemap->createSitemapIndex('https://www.chiavarichairs.com/sitemap', 'Today');


