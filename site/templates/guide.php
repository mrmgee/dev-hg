<?php snippet('header') ?>

<!-- Page Wrapper -->
<div id="page-wrapper">



  <!-- Main -->
  <article id="main" class="blog">
    <header>
      <?= $page->intro()->kirbytext() ?>
    </header>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->abouttxt()->kirbytext() ?>
        </div>
      <?php endif ?>



    <section class="wrapper style5">
    <div class="inner">

    <?php $articlezz = $page->children()->visible()->sortBy('date', 'desc') ?>

<?php foreach($articlezz as $article): ?>

          <article class="article index">
            <header class="article-header">
              <h3 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h3>
            </header>
          </article>

        <?php endforeach ?>

    </div>
    <div style="clear: both;"></div>
    </section>

    <?php snippet('pagination') ?>

  </article><!-- END main -->
</div><!-- END Page Wrapper -->

<?php snippet('foot-code') ?>