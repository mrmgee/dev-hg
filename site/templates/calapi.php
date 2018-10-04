<?php

if(!r::ajax()) go(url('error'));

header('Content-type: application/json; charset=utf-8');

$data = $pages->find('calendar')->children()->visible()->flip()->paginate(10);
$json = array();

foreach($data as $article) {
	$startdate = (string)$article->startdate();
	$starttime = (string)$article->starttime();
	$start = $startdate.' '.date('H:i', strtotime($starttime));
	$enddate = (string)$article->enddate();
	$endtime = (string)$article->endtime();
	$end = $enddate.' '.date('H:i', strtotime($endtime));

  $json[] = array(
  	'title'  => (string)$article->title(),
    'start'  => $start,
    'end'  => $end,
    'description' => (string)$article->description(),
    'url'   => (string)$article->url()
  );

}

echo json_encode($json);

?>