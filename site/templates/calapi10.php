<?php

if(!r::ajax()) go(url('error'));

header('Content-type: application/json; charset=utf-8');

$data = $pages->find('calendar')->children()->visible()->flip()->paginate(10);
$json = array();

foreach($data as $article) {

  $json[] = array(
    'date'  => (string)$article->date('Y-m-d'),
    'badge'  => (string)'true',
    'title' => (string)$article->title(),
    'body'  => (string)$article->text(),
    'footer'  => (string)'At Paisley Park',
    'classname'  => (string)'purple-event',
    'url'   => (string)$article->url()
  );

}

echo json_encode($json);

?>