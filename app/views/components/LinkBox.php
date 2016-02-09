<?php

function basicBox($link = '#', $icon = '#image', $text = 'Test', $external = false) {
  $basicBox = '<div class="col-sm-12"><div class="mod-box">';
  if($external) {
    $basicBox .= '<a href="'.$link.'" class="link-box" target="_blank">';
  }else{
    $basicBox .= '<a href="'.$link.'" class="link-box">';
  }
  $basicBox .= '<h3><span class="icon"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.$icon.'"></use></svg></span> '.$text.'</h3>';
  $basicBox .= '</a></div></div>';
  return $basicBox;
}

function getNewsletter() {
  return basicBox('/newsletter', '#paper', 'Sign Up for our Newsletter');
}
function getTwitter() {
  return basicBox('https://twitter.com/texansforrubio/', '#twitter', '@TexansForRubio', true);
}
function getMedia() {
  return basicBox('/media', '#image', 'Media from TexansForRubio');
}
function getIssuesBox() {
  return basicBox('/issues', '#image', 'More Issues');
}
function getVolunteerBox() {
  return basicBox('https://docs.google.com/forms/d/1CVsxBpnqCFyoZpGImNmIqYSgDb6ItCT3upl274whsCA/viewform?c=0&w=1', '#hammer', 'Volunteer', true);
}

foreach ($data as $box) {
  if($box === 'newsletter') {
    echo getNewsletter();
  }elseif($box === 'twitter') {
    echo getTwitter();
  }elseif($box === 'media') {
    echo getMedia();
  }elseif($box === 'issues') {
    echo getIssuesBox();
  }elseif($box === 'volunteer') {
    echo getVolunteerBox();
  }
}

?>
