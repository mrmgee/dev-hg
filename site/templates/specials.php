<?php snippet('header') ?>
<style type="text/css">
  #main > header {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $page->pagewrapper()->toFile()->url() ?>);
  }
</style>
<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
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

                <section>

                    <?= $page->abouttxt()->kirbytext() ?>
 
                  <hr />
                </section>

                <section>
                  <div class="box alt">
                    <div class="row uniform 50%">
                      <?= $page->contenttxt()->kirbytext() ?>
                    </div>
                  </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('footer') ?>