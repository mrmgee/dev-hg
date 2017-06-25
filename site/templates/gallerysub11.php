<?php
$gallerysub = page('gallerysub')->children()->visible();

foreach($gallerysub as $child):
  echo '<!-- CHILD URI '.$child->title().' -->'; //TESTING
endforeach;




// fetch the basic set of pages
$childsec = '';
$screenshots = page('gallerysub')->children();
//create collection of all images first
    $images = new Collection();
    foreach ($screenshots as $project) {
        foreach ($project->images() as $i) {
            $images->data[] = $i;
        }
    }
//print_r($images); //TESTING


// $gallerysub Children Object
//(
//    [0] gallerysub/galleryitem-Indica
//    [1] gallerysub/galleryitem-Sativa
//    [2] gallerysub/galleryitem-Concentrate
//)
    
snippet('header')
?>
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
                    <h4>ORIG Section Header - Indica</h4>

<?php foreach($images as $image): ?>
<?php echo '<!-- TITLE '.$image->page()->title().' -->'; //TESTING ?> <!-- TITLE 1 Indica -->
<?php // echo '<!-- IMG '.print_r($image).' -->'; //TESTING ?>


<?php if($image->page()->title() != $childsec):$childsec=$image->page()->title(); ?>
    <h4><?php echo $childsec; ?></h4>
 <?php endif  ?>
                        <div class="4u"><span class="image fit"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->caption() ?>" /></span><p><?php echo $image->caption() ?></p></div>






<?php endforeach ?>


                    <hr />

                    </div>
                    <hr />
                  </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('footer') ?>