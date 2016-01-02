<?php

class Newsletter extends Controller
{
	public function index()
	{
    $pagetitle = "Join our Newsletter";
		$innerpage = true;
		$this->view('newsletter/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage));
	}
}
