<?php

class IssuesModel
{
  public $dataroot = "data/issues/";
	public $api = "issues.json";

  public function getIssues()
  {
    $data = file_get_contents($this->dataroot.$this->api);
    $data = json_decode($data);
    $issueArr = $data->issues;

    return $issueArr;
  }

  public function getRandom($num = 5)
  {
    $data = file_get_contents($this->dataroot.$this->api);
		$data = json_decode($data);
    $issueArr = $data->issues;
    shuffle($issueArr);
    $topData = array_slice($issueArr, 0, $num, true);
    return $topData;
  }

  public function getPost($slug)
	{
    $issues = $this->getIssues();
    $fname = $_SERVER['DOCUMENT_ROOT'].'/data/issues/posts/'.$slug.'.md';
    $post = file($fname);
    $postarr = $this->buildPost($post);
		if(empty($postarr)) {
			// TODO
			// should redirect to a 404 page...
			echo "404";
		}else{
      // get all issues and get data for slug'd issue //
      foreach ($issues as $issue) {
        if($issue->link === $slug) {
          $postarr['title'] = $issue->title;
          $postarr['img'] = $issue->img;
        }
      }
			return $postarr;
		}
	}

  private function buildPost($post)
	{
    require_once $_SERVER['DOCUMENT_ROOT']."/app/core/Parsedown.php";

		$buildarr = array();
    	// Get the whole post
      $blog_content = Parsedown::instance()->parse(join('', array_slice($post, 0)));
    	$buildarr = array("content" => $blog_content);
    	return $buildarr;
	}
}
