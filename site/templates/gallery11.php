<?php snippet('header') ?>

<link rel="stylesheet" href="assets/css/photoswipe.css">
<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
<style type="text/css">
  body.landing #page-wrapper {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $page->pagewrapper()->toFile()->url() ?>);
  }
</style>
    <!-- Page Wrapper -->
      <div id="page-wrapper">

        <!-- Header -->
          <header id="header">
            <h1><a href="index.html"><img src="assets/images/logo_wh640.png" style="width:18%"></a></h1>
            <nav id="nav">
              <ul>
                <li class="special">
                  <a href="#menu" class="menuToggle"><span>Menu</span></a>
                  <div id="menu">
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="generic.html">Generic</a></li>
                      <li><a href="elements.html">Elements</a></li>
                      <li><a href="#">Sign Up</a></li>
                      <li><a href="#">Log In</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
          </header>

        <!-- Main -->
          <article id="main">
            <header>
              <?= $page->intro()->kirbytext() ?>
            </header>
            <section class="wrapper style5">
              <div class="inner">

                <section>

                    <?= $page->overtxt()->kirbytext() ?>
 
                  <hr />
                </section>

                <section>
                  <div id="gallery" class="box alt">
                    <div class="row uniform 50%">
                      <h4>Indica</h4>

  <?php foreach($page->images() as $image): ?>
                        <div class="4u"><span class="image fit"><img src="<?php echo $image->url() ?>" alt="img1 Birthday Cake" /><p><?php echo $image->caption() ?></p></span></div> 
  <?php endforeach ?>



<div class="4u"><span class="image fit"><img src="images/Birthday_Cake.jpg" alt="img1 Birthday Cake" /></span></div> 
<div class="4u"><span class="image fit"><img src="images/303_Kush.jpg" alt="img2 303 Kush" /></span></div>
<div class="4u"><span class="image fit"><img src="images/Skywalker_OG.jpg" alt="img3 Skywalker OG" /></span></div>
<div class="4u"><span class="image fit"><img src="images/Gorilla_Glue_4.jpg" alt="img4 Gorilla Glue #4" /></span></div>

<div class="4u"><span class="image fit"><img src="images/Cookies_and_Cream.jpg" alt="img5 Cookies and Cream" /></span></div> 
<div class="4u"><span class="image fit"><img src="images/Bubba_White_91.jpg" alt="img6 Bubba White '91" /></span></div> 
<div class="4u"><span class="image fit"><img src="images/StarDawg.jpg" alt="img7 StarDawg" /></span></div>
                    </div>
                    <hr />
                  </div>
                </section>

              </div>
            </section>
          </article>

    <!-- Scripts -->
      <script src="assets/js/jquery.photoswipe-global.js"></script>
      <script src="assets/js/photoswipe-ui-default.min.js"></script>
<?php snippet('footer') ?>