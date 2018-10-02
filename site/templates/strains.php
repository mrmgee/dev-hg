<?php snippet('header') ?>

<!-- Page Wrapper -->
<div id="page-wrapper">

  <?php snippet('nav') ?>

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
        <section id="one">
          <div id="gallery" class="box alt">
            <div class="row uniform 50%">



    <section class="wrapper style5">
    <div class="inner">
      <section id="one">
        <div id="gallery" class="box alt">
          <div class="row uniform 50%">

<?php
$currentDateArticles = 0;
if($strains->count()):
  foreach($strains as $strain):
    $currentDateArticles = 1;
    echo '<h4>'.$strain->title().'</h4>';
    foreach($strain->images()->sortBy('sort', 'asc') as $image):
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
      echo '<h4>'.$strain->strain().'</h4>';


      echo '<div class="4u"><span class="image fit"><img src="'.$image->url().'" alt="'.$image->caption().'" /></span><p>'.$image->caption().'</p></div>';
    endforeach;

endforeach; ?>




        <?php if ($currentDateArticles !== 1): ?>
          <p>No current specials. Please check back later.</p>
        <?php endif ?>
      <?php else: ?>
        <p>No current specials. Please check back later.</p>
      <?php endif ?>

          </div><!-- END row uniform -->
        </div><!-- END #gallery -->
      </section><!-- END #one -->


    </div><!-- END inner -->
    <div style="clear: both;"></div>
    </section>

    <?php snippet('pagination') ?>

  </article><!-- END main -->
</div><!-- END Page Wrapper -->

<?php snippet('foot-code') ?>