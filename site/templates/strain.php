<?php snippet('header') ?>
<link rel="stylesheet" href="<?php echo kirby()->urls()->assets() . '/css/default-skin/default-skin.css'?>">
    <!-- Page Wrapper -->
      <div id="page-wrapper">
      <?php snippet('nav') ?>
        <!-- Main -->
        <section class="wrapper style2">
          <div class="inner">
            <header class="article-header">
              <h1><?= $page->title()->html() ?></h1>
            </header>
            <section id="strain" class="spotlight">
              <div class="image"><img src="<?= $page->coverimage()->toFile()->url() ?>" alt="" /></div>
              <div class="content">
                <?= $page->text()->kirbytext();
                if(!$page->characteristics()->empty()): ?>
                <ul>
                <?php foreach($page->characteristics()->split(',') as $char2): ?>
                 <li><?php echo $char2 ?></li>
                <?php endforeach ?>
                </ul>
                <?php endif ?>
                <div class="<?= $page->strain()->value() ?>"><h5><?= $page->strain()->value() ?></h5></div>
              </div>
            </section>
          
            <?php snippet('prevnext', ['flip' => true]) ?>
          </div>
        </section>
      </div><!-- END Page Wrapper -->

<?php snippet('foot-code') ?>