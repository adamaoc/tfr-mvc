<?php

class Issues extends Controller
{
	public function index()
	{
    $pagetitle = "Marco Rubio on the Issues";
		$innerpage = true;
		$this->view('issues/index', ['pagetitle' => $pagetitle, 'innerpage' => $innerpage]);
	}
}
