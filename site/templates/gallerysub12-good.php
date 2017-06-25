<?php
$gallerysub = page('gallerysub')->children()->visible();
//create collection of all child pages
    $childpages = new Collection();
    foreach ($gallerysub as $project) {
        foreach ($project->images() as $i) {
            $childpages->data[] = $i;
        }
    }

// print_r($childpages);


$childpage = '1';
$childname = '0';

foreach($childpages as $child):
 //   $childtitle = $child->page()->title();
  if ($child->page()->title() != $childpage) {
    echo '<!-- NAME:'.$child->page()->title().' is not PAGE:'.$childpage.' -->'; //TESTING
    $childpage = $child->page()->title();
    echo '<!-- PAGE '.$childpage.' -->'; //TESTING
    echo '<!-- NAME '.$childname.' - '.$child->name().' -->'; //TESTING
  } else {
    echo '<!-- NAME '.$childname.' - '.$child->name().' -->'; //TESTING
  }

// echo '<!-- CHILD NAME '.$childname.' -->'; //TESTING
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

<?php
foreach($childpages as $child):
echo '<!-- child:'.$child.' -->'; //TESTING
  if ($child->page()->title() != $childpage) {
    foreach($child->images()->sortBy('sort', 'asc') as $childimg):
echo '<!-- childimg:'.$childimg.' -->'; //TESTING
      $childpage = $child->page()->title();
    echo '<h4>'.$childpage.'</h4>';
    echo '<div class="4u"><span class="image fit"><img src="'.$child->url().'" alt="'.$child->caption().'" /></span><p>'.$child->caption().'</p></div>';
    endforeach;

  } else {
    echo '<div class="4u"><span class="image fit"><img src="'.$child->url().'" alt="'.$child->caption().'" /></span><p>'.$child->caption().'</p></div>';
  }
endforeach;
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