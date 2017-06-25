<?php
$gallerysub = page('gallerysub')->children()->visible();
//create collection of all child pages
    $childpages = new Collection();
    foreach ($gallerysub as $project) {
        foreach ($project->images() as $i) {
            $childpages->data[] = $i;
        }
    }
    
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

<?php
// $project->images()
// $childpages->data[]
// $secchild = new Collection(); //create collection of all SECTION children
$childpagename = '0';
$ii = '1';

foreach($childpages as $child): //array of image objects

// echo '<!-- child:'.$child.' -->'; //TESTING

  if ($child->page()->title() == $childpagename) { //IF page IS the current array item
    $secchild->data[] = $child;  //push to SECTION collection
  } else {
    $child->page()->title() = $childpagename; //Set $childpagename to current child title
    $secchildnum.$ii = $secchild;
//    $secchild.$ii = new Collection(); //create collection of all SECTION children
  }
  $ii++;

endforeach;

//echo '<!-- secchild:'.print_r($secchild).' -->'; //TESTING
?>

                    <hr />

                    </div>
                    <hr />
                  </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('footer') ?>