<?php

class Rubio extends Controller
{
	public function index()
	{
    $pagetitle = "More about Marco Rubio";
		$innerpage = true;
		$this->view('rubio/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage));
	}
}
