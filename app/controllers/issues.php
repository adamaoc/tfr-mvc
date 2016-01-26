<?php

class Issues extends Controller
{
	public function index()
	{
    $pagetitle = "Marco Rubio on the Issues";
		$innerpage = true;
		$issuesModel = $this->model('IssuesModel');
		$issues = $issuesModel->getIssues();

		$this->view('issues/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage, 'issues' => $issues));
	}
}
