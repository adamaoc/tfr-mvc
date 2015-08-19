<?php

class Media extends Controller
{
	public function index()
	{
    $pagetitle = "#TeamMarcoTX Media";
		$innerpage = true;
		$this->view('media/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage));
	}
}
