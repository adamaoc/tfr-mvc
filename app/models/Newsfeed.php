<?php

class Newsfeed
{
	public $name;
  public $endpoint = "https://marcorubio.com/feed/";

  public function getFeed()
  {
		$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $xmlresponse = curl_exec($ch);
		// var_dump($xmlresponse);
    $myFeed=simplexml_load_string($xmlresponse);

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
