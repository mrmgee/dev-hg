<?php snippet('header') ?>

    <!-- Page Wrapper -->
      <div id="page-wrapper" class="cal-wrap">

<?php snippet('nav') ?>

        <!-- Main -->
          <article id="main">
            <header>
              <h2>Calendar</h2>
              <?= $page->intro()->kirbytext() ?>
            </header>
            <section class="wrapper style5">
              <div class="inner">

                <section id="calendar">
                  <!-- <div class="row uniform 50%"> -->

                  <div id="bootstrapModalFullCalendar"></div>

                  <div id="fullCalModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                                  <h4 id="modalTitle" class="modal-title"></h4>
                              </div>
                              <div id="modalBody" class="modal-body"></div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <a class="btn btn-primary" id="eventUrl" target="_blank">More info</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- </div> --><!-- class="row uniform 50% -->
                </section>

              </div>
            </section>
          </article>

<?php 
$pageNow = $page->uri();
echo '<h1>cal page->uri: '.$pageNow.'</h1>';
?>

<?php snippet('foot-cal') ?>