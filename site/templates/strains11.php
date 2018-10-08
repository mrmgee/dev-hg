<?php snippet('header') ?>

<!-- Page Wrapper -->
<div id="page-wrapper">

  <?php snippet('nav') ?>

  <!-- Main -->
  <article id="main" class="blog">
    <header>
      <?= $page->intro()->kirbytext() ?>
    </header>
        <div class="intro text">
          <?= $page->abouttxt()->kirbytext() ?>
        </div>

    <section class="wrapper style5">
      <div class="inner">
        <section id="one">
          <div id="gallery" class="box alt">
            <div class="row uniform 50%">






<?php
$strains = page('strains')->children()->visible();


// print_r($strainpages);





// - - - - - - Good up there - - - - - - 



$typename = 'none';  //Sets the type for header Flower/Concentrate/etc


foreach($strainpages as $strain):
//  if ($child->page()->title() != $childpage) {
  if ($strain->title() === $typename) {
//    echo '<!-- TYPE:'.$strain->type().' same is Page:'.$typename.' -->'; //TESTING
echo '<!-- Yes -->';

  } else {
//    echo '<!-- TYPE:'.$strain->type().' is NOT Page:'.$typename.' -->'; //TESTING
 //   $typename = $strain->type();
//    echo '<!-- Type '.$typename.' TITLE: '.$strain->title().' -->'; //TESTING
echo '<!-- No -->';
  }




endforeach; 


  // echo '<h4>'.$strain->title().'</h4><!-- title -->';
  foreach($strain->images()->sortBy('sort', 'asc') as $image):
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
echo '<!-- strain: <p>'.$strain->strain().'</p> -->'; //TESTING


    echo '<div class="4u"><span class="image fit"><img src="'.$image->url().'" alt="'.$image->caption().'" /></span><p>'.$image->caption().'</p></div>';
  endforeach;

?>




          </div><!-- END row uniform -->
        </div><!-- END #gallery -->
      </section><!-- END #one -->


    </div><!-- END inner -->
    <div style="clear: both;"></div>
    </section>

  </article><!-- END main -->
</div><!-- END Page Wrapper -->

<?php snippet('foot-code') ?>