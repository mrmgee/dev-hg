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
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <? // = $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <?= $article->text()->kirbytext() ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </div>
    <div style="clear: both;"></div>
    </section>

    <?php snippet('pagination') ?>

  </article><!-- END main -->
</div><!-- END Page Wrapper -->

<?php snippet('footer') ?>