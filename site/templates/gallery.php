<?php snippet('header') ?>
<style type="text/css">
  #main > header {
    background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $page->pagewrapper()->toFile()->url() ?>);
  }
</style>
<link rel="stylesheet" href="assets/css/photoswipe.css">
<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
    <!-- Page Wrapper -->
      <div id="page-wrapper">

<?php snippet('nav') ?>

        <!-- Main -->
          <article id="main">
            <header>
              <?= $page->intro()->kirbytext() ?>
            </header>
            <section class="wrapper style5">
              <div class="inner">

                <section>

                    <?= $page->abouttxt()->kirbytext() ?>
 
                  <hr />
                </section>

                <section>
                  <div id="gallery" class="box alt">
                    <div class="row uniform 50%">
                      <h4>Indica</h4>


<?php foreach($page->builder()->toStructure() as $section2): ?>
  <?php snippet('secgallery/' . $section2->_fieldset(), array('data2' => $section2)) ?>
<?php endforeach ?>

                      <hr />
<?php $tags = $page->images()->pluck('tags', ',', true); ?>
                      <h4>22 Indica</h4>
<?php foreach($tags as $tag): ?>
                      <h4><?= html($tag) ?></h4>
<?php endforeach ?>


<?php
foreach($page->images()->sortBy('sort', 'asc') as $image):
  if (strpos($image->name(), 'banner') !==false):
 //   DO NOTHING ?>
<?php  else: ?>
                        <div class="4u"><span class="image fit"><img src="<?php echo $image->url() ?>" alt="img1 Birthday Cake" /></span><p><?php echo $image->caption() ?></p></div>
 <?php endif;
endforeach;
?>


                    </div>
                    <hr />
                  </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('footer') ?>