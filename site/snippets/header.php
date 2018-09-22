<?php
if (strlen($page->pagewrapper())==0) {
  $bkgImg = '/content/home/banner.jpg'; //if the string is empty
} else {
  $bkgImg = $page->pagewrapper()->toFile()->url(); //if the string is not empty
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Higher Grade - Medical Only</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/main.css?v='.date('his'); ?>">
    <style type="text/css">
    #main > header {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $bkgImg ?>); 
  }
    </style>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  </head>
  <body class="landing">