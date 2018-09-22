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
    


foreach($page->images()->shuffle() as $bannerimg):
  $bannerimgurl = $bannerimg;
endforeach;


snippet('header');
?>
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
                <section id="one">
                  <div id="gallery" class="box alt">
                    <div class="row uniform 50%">
<?php
$gallerysub2 = page('gallerysub')->children()->visible();

//print_r($gallerysub2); //TESTING
// Children Object
//     [0] gallerysub/galleryitem-Indica
//     [1] gallerysub/galleryitem-Sativa
//     [2] gallerysub/galleryitem-Concentrate


foreach($gallerysub2 as $gallerysubpage):
  echo '<h4>'.$gallerysubpage->title().'</h4>';
    foreach($gallerysubpage->images()->sortBy('sort', 'asc') as $image):
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING

        //<h4>1 Indica</h4>

      echo '<div class="4u"><span class="image fit"><img src="'.$image->url().'" alt="'.$image->caption().'" /></span><p>'.$image->caption().'</p></div>';
    endforeach;

endforeach;




// print_r($image); //TESTING
?>

                    <hr />

                    </div>
                    <hr />
                  </div>
                </section>

              </div>
            </section>
          </article>

<?php snippet('foot-code') ?>