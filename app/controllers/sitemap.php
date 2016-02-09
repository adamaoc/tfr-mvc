<?php

class Sitemap extends Controller
{
	public $pages = '';
  public $dataroot = "data/links/";
	public $sitelinkdata = "sitelinks.json";

	public function __construct()
	{
    $data = file_get_contents($this->dataroot.$this->sitelinkdata);
		$data = json_decode($data);

		$sitelinks = $data->siteLinks;

		$links = array();

    foreach ($sitelinks as $link) {
			$links[] = array(
				"slug" => $link->slug,
				"pagename" => $link->pagename,
				"url" => $link->link,
				"target" => $link->target
			);
		}

		$this->pages = $links;
	}

	public function index()
	{
    $pagetitle = "Sitemap";
		$innerpage = true;
    $pages = array(
			"mainlinks" => $this->pages
    );

    $this->view('sitemap/index', array(
      'pagetitle' => $pagetitle,
      'innerpage' => $innerpage,
      'pages'     => $pages
    ));
    
	}

	public function xml()
	{
    $pages = array(
			"mainlinks" => $this->pages
    );

		$this->view('sitemap/xml', array(
			"pages" => $pages
		));
	}
}
