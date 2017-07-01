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
            <section class="wrapper style4">
              <div class="inner">

                <section class="spotlight">
                  <div class="image"><img src="<?= $page->spot1image()->toFile()->url() ?>" alt="" /></div>
                  <div class="content">
                    <?= $page->spot1txt()->kirbytext() ?>
                  </div>
                </section>


                <section>
                  <hr />
                  <ul class="icons major">
                    <li><span class="icon fa-medkit major style1"><span class="label">Lorem</span></span></li>
                    <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                    <li><span class="icon fa-list-alt major style3"><span class="label">Dolor</span></span></li>
                  </ul>

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