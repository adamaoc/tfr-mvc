<?php

class Home extends Controller
{
	public function index()
	{
		$newsFeed = $this->model('Newsfeed');
		$feed = $newsFeed->getFeed();

		$this->view('home/index', ['feed' => $feed]);
	}
}
