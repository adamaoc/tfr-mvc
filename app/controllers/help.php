<?php

class Help extends Controller
{
	public function index()
	{
    $pagetitle = "How to Help";
		$innerpage = true;
		$this->view('help/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage));
	}
}
