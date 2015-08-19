<?php

class About extends Controller
{
	public function index()
	{
    $pagetitle = "What we're about";
		$innerpage = true;
		$this->view('about/index', ['pagetitle' => $pagetitle, 'innerpage' => $innerpage]);
	}
}
