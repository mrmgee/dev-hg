<?php //snippet('header') ?>


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
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/content/home/banner.jpg'); 
  }
    </style>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  </head>
  <body class="landing">






    <!-- Page Wrapper -->
      <div id="page-wrapper">

<?php snippet('nav') ?>

        <!-- Main -->
          <article id="main">
            <header>
              <?= $page->intro()->kirbytext() ?>
            </header>
            <section class="wrapper style5">
              <div class="inner">

                <section id="abouttxt">
                    <?= $page->abouttxt()->kirbytext() ?>
                  <hr />
                </section>

                <section id="dailymenu">
                    <div class="row uniform 50%">
                      <h4>Calendar</h4>
                      <div id="calendar"></div>           
<?php if($events->count() > 0): ?>
                        <ul class="events">
<?php foreach($events as $event): ?>
                          <li class="single-event">
                            <h3><?php echo $event->title() ?></h3>
                            <time><?php echo $event->date('d.m.Y') ?></time>
                            <?php echo $event->text()->kirbytext() ?>
                          </li>
<?php endforeach; ?>
                        </ul>
<?php else: ?>
    <p>No events found.</p>
<?php endif; ?>


                    </div>
                </section>

              </div>
            </section>
          </article>

<?php //snippet('foot-code') ?>

<!-- Footer -->
          <footer id="footer">
            <div class="inner">
              <h2 class="major">Follow us <a href="https://www.instagram.com/higher_grade_denver" target="_blank">@higher_grade_denver</a></h2>
              <ul class="icons">
                <li><a href="https://www.instagram.com/higher_grade_denver" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.facebook.com/HigherGradeCO/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.twitter.com/higher_grade_denver" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
              </ul>

<script type='text/javascript'>
function initMap() {
  var uluru = {lat: 39.7695843, lng: -105.02805360000002};
  var gmap = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 12,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: gmap,
    title: 'Higher Grade'
  });    
}
</script>
<div id="gmap"></div>
<script async defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDiFv0DmV5Qu3YIGOu3yEWKKpdVow18uC0&amp;callback=initMap'></script>

            <ul class="contact">
              <li class="fa-home">
                <p>3111 W.38th Ave.<br />
Denver, 80211</p>                <!-- 3111 W.38th Ave.<br />
                Denver, 80211<br /> -->
              </li>
              <li class="fa-clock-o">
                <p>Mon-Fri 10:00am - 7:00pm<br />
Sat-Sun 10:00am - 7:00pm</p>                <!-- Mon-Fri 10:00am - 7:00pm<br />
                Sat-Sun 10:00am - 7:00pm -->
              </li>
              <li class="fa-phone">
                <p>(303) 955-0186</p>                <!-- (303) 955-0186 -->
              </li>
            </ul>

            <ul class="copyright">
              <li>
                <p>&copy; Higher Grade</p>              </li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src="http://bpd/kirby/assets/js/jquery.min.js"></script>
      <script src="http://bpd/kirby/assets/js/jquery.scrollex.min.js"></script>
      <script src="http://bpd/kirby/assets/js/jquery.scrolly.min.js"></script>
      <script src="http://bpd/kirby/assets/js/jquery.onvisible.min.js"></script>
      <script src="http://bpd/kirby/assets/js/skel.min.js"></script>
      <script src="http://bpd/kirby/assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="http://bpd/kirby/assets/js/jquery.cookie.js"></script>
      <script src="http://bpd/kirby/assets/js/age-verification.js"></script>
      <script src="http://bpd/kirby/assets/js/main.js"></script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102295425-1', 'auto');
        ga('send', 'pageview');
      </script>


    <!-- Calendar Scripts -->
<script src="<?php echo kirby()->urls()->assets() . '/js/moment.min.js'?>"></script>
<script src="<?php echo kirby()->urls()->assets() . '/js/fullcalendar.min.js'?>"></script>
<script src="<?php echo kirby()->urls()->assets() . '/js/calendar.js'?>"></script>

<link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/fullcalendar.min.css'?>">


  </body>
</html>
