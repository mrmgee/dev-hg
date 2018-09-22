<?php snippet('header') ?>

<style type="text/css">
@media only screen and (min-device-width : 320px) and (max-device-width : 736px) {
.wrapper {
  padding: 1em 0.4em 1em 0.4em;
}
.wrapper > .inner {
  width: 100%;
}
#abouttxt, #dailymenu h4 {
  display: none;
}

.frcontainer {
  height: 500px;
  }
}

@media only screen and (min-width : 1224px) {
#abouttxt {
  display: block;
}

.frcontainer {
  height: 0;
  }
}
.frwrapper {
  width: 100%;
}
.frcontainer {
  width: 100%;
  padding-bottom: 50%;
  overflow: hidden;
  position: relative;
}
.frcontainer iframe {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  position: absolute;
}
</style>
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
                      <h4>Daily Menu</h4>                   
<!--
<iframe src="https://weedmaps.com/dispensaries/higher-grade/menu/embed" width="1000" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
-->
<div class="frwrapper">
  <div class="frcontainer">
    <iframe src="https://weedmaps.com/dispensaries/higher-grade/menu/embed" width="100%" height="700"></iframe>
   </div>
</div>

                    </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('foot-code') ?>
