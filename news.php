<?php
setlocale(LC_ALL, 'tr_TR');
require "simple_html_dom.php";
$data = array();

 $html = file_get_html("https://kriptokoin.com/haberler/");

for ($i=0; $i < 10; $i++) { 
  # code...
$content =  $html->find('article',$i);
  $tempdata["id"] =$i+1;
  $tempdata["link"] =  $content->find('h5 > a',0)->href;
  $tempdata["image"] = $content->find('img',0)->getAttribute('data-original');
  $tempdata["title"] =  strip_tags($content->find('h5 > a',0)->innertext);
  $tempdata["desc"] = $content->find('p',0)->innertext;
  $tempdata["lang"] = "tr";
  array_push($data,$tempdata);
}


$html = file_get_html("https://kriptokoin.com/haberler/page/2/");

for ($i=0; $i < 10; $i++) { 
  # code...
$content =  $html->find('article',$i);
  $tempdata["id"] =$i+11;
  $tempdata["link"] =  $content->find('h5 > a',0)->href;
  $tempdata["image"] = $content->find('img',0)->getAttribute('data-original');
  $tempdata["title"] =  strip_tags($content->find('h5 > a',0)->innertext);
  $tempdata["desc"] = $content->find('p',0)->innertext;
   $tempdata["lang"] = "tr";
  array_push($data,$tempdata);
}

$html = file_get_html("https://kriptokoin.com/haberler/page/3/");

for ($i=0; $i < 10; $i++) { 
  # code...
$content =  $html->find('article',$i);
  $tempdata["id"] =$i+21;
  $tempdata["link"] =  $content->find('h5 > a',0)->href;
  $tempdata["image"] = $content->find('img',0)->getAttribute('data-original');
  $tempdata["title"] =  strip_tags($content->find('h5 > a',0)->innertext);
  $tempdata["desc"] = $content->find('p',0)->innertext;
   $tempdata["lang"] = "tr";
  array_push($data,$tempdata);
}

echo json_encode($data);