<?php

class Newsfeed
{
	public $name;
  public $endpoint = "https://marcorubio.com/feed/";

  public function getFeed()
  {
    $myFeed = simplexml_load_file($this->endpoint);
    $obj = array();

    date_default_timezone_set('America/Los_Angeles');

    for ($i = 0; $i <= 6; $i++) {
      $article = $myFeed->channel->item;
      $obj[$i]['title'] = htmlspecialchars($article[$i]->title);
      $obj[$i]['link'] = htmlentities($article[$i]->link);
      $obj[$i]['pubDate'] = date("F jS, Y",strtotime($article[$i]->pubDate));
    }

    return $obj;

  }
}
