<?php

if(!r::ajax()) go(url('error'));

header('Content-type: application/json; charset=utf-8');

$data = $pages->find('calendar')->children()->visible()->flip()->paginate(10);
$json = array();

foreach($data as $article) {

  $json[] = array(
  	'title'  => (string)$article->title(),
  	'allday'  => (string)$article->allday(),
    'start'  => (string)$article->startdate('Y-m-d'),
    'end'  => (string)$article->enddate('Y-m-d H:i:s'),
    'description' => (string)$article->description(),
    'url'   => (string)$article->url()
  );

}

echo json_encode($json);

?>