<?php snippet('header') ?>
<link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/default-skin/default-skin.css'?>">
    <!-- Page Wrapper -->
      <div id="page-wrapper">
      <?php snippet('nav') ?>
        <!-- Main -->
        <section class="wrapper style4">
          <!-- <div class="inner"> -->
          <article class="article single wrap inner">
            <header class="article-header">
              <h1><?= $page->title()->html() ?></h1>
              <div class="intro text">
                <?= $page->date('F jS, Y') ?>
              </div>
            </header>

          <?php snippet('coverimage', $page) ?>
          
          <div class="text">
            <?= $page->text()->kirbytext() ?>
          </div>
        
          <?php snippet('prevnext', ['flip' => true]) ?>

          </article>
        </section>
      </div><!-- END Page Wrapper -->

<?php snippet('footer') ?>