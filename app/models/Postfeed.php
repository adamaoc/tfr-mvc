<?php

class Postfeed
{
  public $pubEndpoint = "https://medium.com/feed/@texansforrubio";
  public $recoEndpoint = "https://medium.com/feed/@texansforrubio/has-recommended";

  public function getFeed()
  {
    $obj = array();
    $myFeed = simplexml_load_file($this->pubEndpoint, 'SimpleXMLElement', LIBXML_NOWARNING);

    if($myFeed) {
      date_default_timezone_set('America/Los_Angeles');
      $numPosts = count($myFeed->channel->item);

      for ($i = 0; $i < $numPosts; $i++) {
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
