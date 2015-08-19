<?php

class Help extends Controller
{
	public function index()
	{
    $pagetitle = "How to Help";
		$innerpage = true;
		$this->view('help/index', ['pagetitle' => $pagetitle, 'innerpage' => $innerpage]);
	}
}
