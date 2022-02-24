<?php
setlocale(LC_ALL, 'tr_TR');
require "simple_html_dom.php";
$data = array();

    $KEY_NUMBER = 1;
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=1");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 1";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }
   
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=2");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 2";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=3");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 3";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=4");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 4";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=5");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 5";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=6");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 6";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=7");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 7";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=8");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 8";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=9");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 9";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

  $html = file_get_html("https://statsroyale.com/decks/popular?arena=10");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 10";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=11");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 11";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=12");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 12";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=13");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 13";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }
  $html = file_get_html("https://statsroyale.com/decks/popular?arena=14");
  $content =  $html->find('div[class=popularDecks__deck]',0);

  for($i=0; $i < count($html->find('div[class=popularDecks__deck]')); $i++){
    $content =  $html->find('div[class=popularDecks__deck]',$i);
    $tempdata["id"] = $KEY_NUMBER++;
    $tempdata["winrate"] = strip_tags($content->find('div[class=ui__headerBig]',0)->innertext);
    $tempdata["link"] = $content->find('a',8)->href;
    $tempdata["arena"] = "arena 14";
    $tempdata["deck1"] = $content->find('img',0)->src;
    $tempdata["deck2"] = $content->find('img',1)->src;
    $tempdata["deck3"] = $content->find('img',2)->src;
    $tempdata["deck4"] = $content->find('img',3)->src;
    $tempdata["deck5"] = $content->find('img',4)->src;
    $tempdata["deck6"] = $content->find('img',5)->src;
    $tempdata["deck7"] = $content->find('img',6)->src;
    $tempdata["deck8"] = $content->find('img',7)->src;

    array_push($data,$tempdata);
  }

echo json_encode($data);