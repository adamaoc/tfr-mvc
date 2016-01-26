<?php

class Postfeed
{
  public $pubEndpoint = "https://medium.com/feed/@texansforrubio";
  public $recoEndpoint = "https://medium.com/feed/@texansforrubio/has-recommended";

  public function getFeed()
  {
    $obj = array();

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->pubEndpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $xmlresponse = curl_exec($ch);
    $myFeed=simplexml_load_string($xmlresponse);

    if($myFeed) {
      date_default_timezone_set('America/Los_Angeles');
      $numPosts = count($myFeed->channel->item);

      for ($i = 0; $i < 3; $i++) {
        $article = $myFeed->channel->item;
        $obj[$i]['title'] = htmlspecialchars($article[$i]->title);
        $obj[$i]['link'] = htmlentities($article[$i]->link);
        $obj[$i]['pubDate'] = date("F jS, Y",strtotime($article[$i]->pubDate));
        $obj[$i]['description'] = htmlentities($article[$i]->description);
      }
    }

    return $obj;

  }
}
