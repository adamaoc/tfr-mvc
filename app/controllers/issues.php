<?php

class Issues extends Controller
{
	public function index($slug = '')
	{
    $pagetitle = "Marco Rubio on the Issues";
		$innerpage = true;
		$issuesModel = $this->model('IssuesModel');
		$issues = $issuesModel->getIssues();

		if(!empty($slug)){
			$post = $issuesModel->getPost($slug);
			$postTitle = $post['title'];
			$postImg = $post['img'];
			$postContent = $post['content'];
			$this->view('issues/single', array(
																		'pagetitle' => $postTitle,
																		'innerpage' => $innerpage,
																		'postImg' => $postImg,
																		'postContent' => $postContent));
		}else{
			$this->view('issues/index', array('pagetitle' => $pagetitle, 'innerpage' => $innerpage, 'issues' => $issues));
		}
	}
}
