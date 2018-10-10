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



<form id="filters" method="post">
  <!-- give the select the name of the category to filter by -->
  <select name="type" onchange="this.form.submit()">
    <option selected value="">Select a type</option>

    <!-- let's fill the options with our colors -->
    <?php foreach($type as $item): ?>
      <!-- we don't want empty items -->
      <?php if(!$item) continue ?>

      <!-- set the option to selected if selected -->
      <option<?php e(isset($data['type']) && $data['type'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item?></option>
    <?php endforeach ?>
  </select>
  <select name="strain" onchange="this.form.submit()">
    <option selected value="">Select a strain</option>

    <?php foreach($strain as $item): ?>
      <?php if ($item == "") continue; ?>
      <option<?php e(isset($data['strain']) && $data['strain'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item ?></option>
    <?php endforeach ?>
  </select>
  <select name="potency" onchange="this.form.submit()">
    <option selected value="">Select a potency</option>

    <?php foreach($potency as $item): ?>
      <?php if($item == "") continue; ?>
      <option<?php e(isset($data['potency']) && $data['potency'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item ?></option>
    <?php endforeach ?>
  </select>
</form>




<?php


// Controller
// $projects = $page->children()->visible();

foreach($projects as $typepage => $items):
  
  echo '<h4>'.$typepage.'</h4>';

  foreach($items->images()->sortBy('sort', 'asc') as $image): //Good for alpha title names
    echo '<div class="4u"><span class="image fit"><img src="'.$image->url().'" /></span><p>'.$image->caption().'</p></div>';
  endforeach;

endforeach;


/*

$typecollection = page('strains')->children()->visible()->groupBy('type');
//print_r($typecollection);

foreach($typecollection as $typepage => $typeitems):
  echo '<h4>'.$typepage.'</h4>';
//    foreach($typeitems->images()->sortBy('sort', 'asc') as $image): //Good alpha image names
    foreach($typeitems->sortBy('sort', 'asc') as $image): //Good for alpha title names
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
      echo '<div class="4u"><span class="image fit"><img src="'.$image->image()->url().'" alt="'.$image->image()->caption().'" /></span><p>'.$image->image()->caption().'</p></div>';
    endforeach;
endforeach;


foreach($typecollection as $typepage => $typeitems):
  echo '<p>. . . . . . . . . . . .</p> <h4>'.$typepage.'</h4>';
  echo '<ul>';
    foreach($typeitems->sortBy('sort', 'asc') as $item):
echo '<li>'.$item->title().'</li>';
    endforeach;
  echo '</ul>';
endforeach;



echo '<p> . . . . . . . . . . .</p><br><p>. . . . . . . . . . . .</p>';



$straincollection = page('strains')->children()->visible()->groupBy('strain');
//print_r($typecollection);

foreach($straincollection as $strainpage => $strainitems):
  echo '<h4>'.$strainpage.'</h4>';
//    foreach($typeitems->images()->sortBy('sort', 'asc') as $image): //Good alpha image names
    foreach($strainitems->sortBy('sort', 'asc') as $image): //Good for alpha title names
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
      echo '<div class="4u"><span class="image fit"><img src="'.$image->image()->url().'" alt="'.$image->image()->caption().'" /></span><p>'.$image->image()->caption().'</p></div>';
    endforeach;
endforeach;


foreach($straincollection as $strainpage => $strainitems):
  echo '<p>. . . . . . . . . . . .</p> <h4>'.$strainpage.'</h4>';
  echo '<ul>';
    foreach($strainitems->sortBy('sort', 'asc') as $item):
echo '<li>'.$item->title().'</li>';
    endforeach;
  echo '</ul>';
endforeach;


*/
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