<?php snippet('header') ?>

<style type="text/css">
  body.landing #page-wrapper {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $page->pagewrapper()->toFile()->url() ?>);
  }
</style>
    <!-- Page Wrapper -->
      <div id="page-wrapper">
<?php snippet('nav') ?>
        <!-- Banner -->
          <section id="banner">
            <div class="inner">
              <!-- <h2 style="background: url(images/logo_wh640.png) no-repeat fixed center; max-width:100%"> -->
              <!-- <h2>Spectral</h2> -->
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
              <p><span class="icon fa-comment fa teQu"></span> Car1 An absolutely amazing place to shop. All their concentrates are on point, especially the olio! And the staff is welcoming and had answers to all my questions. They even laminated my card for me which was very nice!! Can't wait to come back in soon</p>
            </article>

            <article>
              <p><span class="icon fa-comment fa teQu"></span> Car2 If you're a quality kind of person this is your stop. The dankest live resin and nug run I've smelled in a while. I'll for sure be back in the future. The bud tenders are very knowledgeable and even friendlier than they are knowledgeable</p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>Car3 I had learned about this dispensary through instagram and immediately some of the genetics grabbed my attention. I stopped in and the bud quality was killer! Each strain looked and smelled fantastic! I recommend stopping by to check out their great selection of bud as well as concentrates!</p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>Car4 What I love most is they have great strains not your basic menu like every other spot. Hope they keep bringing in new Funk as I will definitely continue to stop by!! Cheers guys, you are doing it right!!!</p>
            </article>

            <article>
              <p><span class="icon fa-comment teQu"></span>Car5 Phenomenal product, excellent service, convenient location, and a beatiful shop. I'll be a regular untill further notice</p>
            </article>

          </div>
        </section>

        <!-- CTA -->
          <section id="cta" class="wrapper style4" style="background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(assets/images/footer.jpg); background-position: 20% 40%; background-size: 100%; ">
            <div class="inner">
              <header>
                <h2>Become a Member</h2>
                <p>We'll access and print your new medical card! Join as a member and we'll honor all EPC plant counts.</p>
              </header>
              <ul class="actions vertical">
                <li><a href="#" class="button fit special">Join Now</a></li>
              </ul>
            </div>
          </section>

<?php snippet('footer') ?>