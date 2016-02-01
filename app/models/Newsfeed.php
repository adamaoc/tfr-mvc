<?php

class Newsfeed
{

	public function getFeed()
	{
		$data = file_get_contents('./data/news/newsFeed.json');

		return json_decode($data);
	}

}
