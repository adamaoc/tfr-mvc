<?php

class Postfeed
{
  public function getFeed()
  {
    $data = file_get_contents('./data/posts/posts.json');

		return json_decode($data);
  }
}
