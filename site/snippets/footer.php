<?php echo '<h1>footer page->uri: '.$page->uri().'</h1>' ?> 
        <!-- Footer -->
          <footer id="footer">
            <div class="inner">
              <h2 class="major">Follow us <a href="<?= $data->link1txt()->text() ?>" target="_blank"><?= $data->link1label()->text() ?></a></h2>
              <ul class="icons">
                <li><a href="<?= $data->link1txt()->text() ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="<?= $data->link2txt()->text() ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="<?= $data->link3txt()->text() ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="<?= $data->link4txt()->text() ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
              </ul>


<!-- Google Maps script --> 

            <ul class="contact">
              <li class="fa-home">
                <?= $data->addresstxt()->kirbytext() ?>
                <!-- 3111 W.38th Ave.<br />
                Denver, 80211<br /> -->
              </li>
              <li class="fa-clock-o">
                <?= $data->hourstxt()->kirbytext() ?>
                <!-- Mon-Fri 10:00am - 7:00pm<br />
                Sat-Sun 10:00am - 7:00pm -->
              </li>
              <li class="fa-phone">
                <?= $data->phonetxt()->kirbytext() ?>
                <!-- (303) 955-0186 -->
              </li>
            </ul>

            <ul class="copyright">
              <li>
                <?= $data->copyrighttxt()->kirbytext() ?>
              </li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrollex.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.scrolly.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.onvisible.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/skel.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/util.js'?>"></script>
<?php if (($page->uri()=='gallery') || ($page->uri()=='gallerysub')): ?>
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.photoswipe-global.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/photoswipe-ui-default.min.js'?>"></script>
<?php endif ?>
<?php if ($page->uri()=='calendar'): ?>
    <!-- Calendar Scripts -->
      <script src="<?php echo kirby()->urls()->assets() . '/js/moment.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/fullcalendar.min.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/bootstrap-3.0.2/js/bootstrap.min.js'?>"></script>

      <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/fullcalendar.css'?>">
<!--       <link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/bootstrap-3.0.2/css/bootstrap.css'?>"> -->
<?php endif ?>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="<?php echo kirby()->urls()->assets() . '/js/jquery.cookie.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/age-verification.js'?>"></script>
      <script src="<?php echo kirby()->urls()->assets() . '/js/main.js'?>"></script>


<!-- Google Analytics script -->    


<?php if ($page->uri()=='calendar'): ?>
      <script>
          $(document).ready(function() {

                      // $.getJSON('http://bpd/calendar/calapi', function(r) {
                      $.getJSON('<?php echo kirby()->urls()->index() . '/calendar/calapi'  ?>', function(r) {
                          $.each(r, function(i, article) {
                              console.log(article);
                          });
                      });

              $('#bootstrapModalFullCalendar').fullCalendar({



                windowResize: function(view) {
                  // alert('The calendar has adjusted to a window resize');
                  if ($(window).width() < 514) {
                    // $('#bootstrapModalFullCalendar').fullCalendar( 'changeView', 'basicDay' );
                    $('#bootstrapModalFullCalendar').fullCalendar( 'changeView', 'month' );
                    var calHeight = $(window).height()*0.96;
                    $('#bootstrapModalFullCalendar').fullCalendar('option', 'contentHeight', calHeight);
                    $('#bootstrapModalFullCalendar').fullCalendar('option', 'timeFormat', ' ');
                  } else {
                    $('#bootstrapModalFullCalendar').fullCalendar( 'changeView', 'month' );
                  }
                },
                  header: {
                      left: '',
                      center: 'prev title next',
                      right: ''
                  },
                  eventClick:  function(event, jsEvent, view) {
                      $('#modalTitle').html(event.title);
                      $('#modalBody').html(event.description);
                      $('#eventUrl').attr('href',event.url);
                      $('#fullCalModal').modal();
                      return false;
                  },
                  events: {
                          url: '<?php echo kirby()->urls()->index() . '/calendar/calapi'  ?>',
                          error: function() {
                            $('#script-warning').show();
                          }
                        },
                        loading: function(bool) {
                          $('#loading').toggle(bool);
                        }
              });
          });
      </script>
<?php endif ?>

  </body>
</html>