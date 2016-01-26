<?php

class Home extends Controller
{
	public function index()
	{
		$newsFeed = $this->model('Newsfeed');
		$postFeed = $this->model('Postfeed');
		$issuesModel = $this->model('IssuesModel');
		$posts = $postFeed->getFeed();
		$feed = $newsFeed->getFeed();
		$issues = $issuesModel->getRandom();

		$this->view('home/index', array('feed' => $feed, 'posts' => $posts, 'issues' => $issues));
	}
}
