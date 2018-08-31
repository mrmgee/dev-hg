<?php snippet('header') ?>

<!-- Page Wrapper -->
<div id="page-wrapper">

  <?php snippet('nav') ?>

  <!-- Main -->
<<<<<<< HEAD
  <article id="main" class="blog">
=======
  <article id="main">
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
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



<<<<<<< HEAD
    <section class="wrapper style5">
    <div class="inner">
      <?php if($articles->count()): ?>

        <?php // foreach($articles as $article): ?>
        <?php foreach($articles->sortBy('datestart', 'desc') as $article):
          if($article->dateend('Y-m-d') >= date('Y-m-d')): ?>

          <article class="article index">
=======
    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

<<<<<<< HEAD
              <p class="article-date">
                <?= $article->date('m-d-y','datestart');
                if($article->date('m-d-y','dateend') !== $article->date('m-d-y','datestart')):
                  echo " until ";
                  echo $article->date('m-d-y','dateend');
                else:
                  echo " only";
                endif ?>
              </p>
=======
              <p class="article-date"><?= $article->date('F jS, Y') ?></p>
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
<<<<<<< HEAD
                <? // = $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <?= $article->text()->kirbytext() ?>
=======
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

<<<<<<< HEAD
        <?php endif;
        endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </div>
    <div style="clear: both;"></div>
=======
          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
>>>>>>> 026ed1da4f67572b5f9b3aead5ba1fa64f10d487
    </section>

    <?php snippet('pagination') ?>

  </article><!-- END main -->
</div><!-- END Page Wrapper -->

<?php snippet('footer') ?>