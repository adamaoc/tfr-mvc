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
}
