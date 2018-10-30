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
              </div>
            </header>
            <div class="row 50%">
              
            <div class="12u">
          <?php snippet('coverimage', $page) ?>
<!--            </div> -->
<!--            <div class="6u"> -->
          <?= $page->text()->kirbytext() ?>
          <?php
          if(!$page->characteristics()->empty()): ?>
              <ul>
          <?php foreach($page->characteristics()->split(',') as $char2): ?>
                <li><?php echo $char2 ?></li>
          <?php endforeach ?>
              </ul>
          <?php endif ?>
              <div class="<?= $page->strain()->value() ?>"><h5><?= $page->strain()->value() ?></h5></div>
            </div>

            </div>


        
          <?php snippet('prevnext', ['flip' => true]) ?>

          </article>
        </section>
      </div><!-- END Page Wrapper -->

<?php snippet('foot-code') ?>