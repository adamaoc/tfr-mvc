<?php

class Home extends Controller
{
	public function index()
	{
		$newsFeed = $this->model('Newsfeed');
		$postFeed = $this->model('Postfeed');
		$posts = $postFeed->getFeed();
		$feed = $newsFeed->getFeed();

		$this->view('home/index', array('feed' => $feed, 'posts' => $posts));
	}
}
