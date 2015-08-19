<?php

class About extends Controller
{
	public function index()
	{
    $pagetitle = "What we're about";
		$innerpage = true;
		$this->view('about/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage));
	}
}
