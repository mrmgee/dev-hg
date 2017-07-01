<?php snippet('header') ?>

<style type="text/css">
  body.landing #page-wrapper {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.5)), url(<?= $page->pagewrapper()->toFile()->url() ?>);
  }
</style>
    <!-- Page Wrapper -->
      <div id="page-wrapper">
<?php snippet('nav') ?>
        <!-- Banner -->
          <section id="banner">
            <div class="inner">
              <h2><img src="assets/images/logo_wh1280.png"></h2>
              <p><?= $page->intro()->kirbytext() ?></p>
              <ul class="actions">
                <li><a href="dailymenu" class="button special"><?= $page->buttontxt()->kirbytext() ?></a></li>
              </ul>
            </div>
            <a href="#one" class="more scrolly">Learn More</a>
          </section>

        <!-- One -->
          <section id="one" class="wrapper style1 special">
            <div class="inner">
              <header class="major">
              <?= $page->abouttxt()->kirbytext() ?>
              </header>
              <ul class="icons major">
                <li><span class="icon fa-medkit major style1"><span class="label">Lorem</span></span></li>
                <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                <li><span class="icon fa-list-alt major style3"><span class="label">Dolor</span></span></li>
              </ul>
            </div>
          </section>

        <!-- Two -->
          <section id="two" class="wrapper alt style2">
            <section class="spotlight">
              <div class="image">
              <img src="<?php
                $image = new Asset($page->spot1image()->toFile()->url());
                echo thumb($image, array('width' => 200))->url();
              ?>" alt="" />

              <!-- echo thumb($page->image('cover.jpg'), array('width' => 300)); -->
              <!-- <img src="<?= $page->spot1image()->toFile()->url() ?>" alt="" /> --></div>
              <div class="content">
                <?= $page->spot1txt()->kirbytext() ?>
                <a href="dailymenu" class="button special">View all</a>
              </div>
            </section>
            <section class="spotlight">
              <div class="image"><img src="<?= $page->spot2image()->toFile()->url() ?>" alt="" /></div>
              <div class="content">
                <?= $page->spot2txt()->kirbytext() ?>
                <a href="dailymenu" class="button special">View all</a>
              </div>
            </section>
            <section class="spotlight">
              <div class="image"><img src="<?= $page->spot3image()->toFile()->url() ?>" alt="" /></div>
              <div class="content">
                <?= $page->spot3txt()->kirbytext() ?>
                <a href="dailymenu" class="button special">View all</a>
              </div>
            </section>
          </section>


      <!-- Carousel -->
        <section class="carousel">
          <h2>What our Patients Say</h2>
          <div class="reel">
            <article>
              <p><span class="icon fa-comment fa teQu"></span>
              <?= $page->test1txt()->kirbytext() ?>
              </p>
            </article>

            <article>
              <p><span class="icon fa-comment fa teQu"></span>
              <?= $page->test2txt()->kirbytext() ?>
              </p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>
              <?= $page->test3txt()->kirbytext() ?>
              </p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>
              <?= $page->test4txt()->kirbytext() ?>
              </p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>
              <?= $page->test5txt()->kirbytext() ?>
              </p>
            </article>

          </div>
        </section>

        <!-- Founders -->
          <section id="founders" class="wrapper style1 special" style="background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(assets/images/footer.jpg); background-position: 20% 40%; background-size: 100%; ">
            <div class="inner">
              <header class="major">
              <?= $page->founderstxt()->kirbytext() ?>
              </header>
            </div>
          </section>

<?php snippet('footer') ?>