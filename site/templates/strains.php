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
        <section id="filt">

<form id="filters" method="post">
  <!-- give the select the name of the category to filter by -->

          <ul class="actions fit">
            <li class="select-wrapper">
  <select  name="type" onchange="this.form.submit()">
    <option selected value="">Type</option>

    <!-- let's fill the options with our colors -->
    <?php foreach($type as $item): ?>
      <!-- we don't want empty items -->
      <?php if(!$item) continue ?>

      <!-- set the option to selected if selected -->
      <option<?php e(isset($data['type']) && $data['type'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item?></option>
    <?php endforeach ?>
  </select>
              </li>
              <li class="select-wrapper">
  <select name="strain" onchange="this.form.submit()">
    <option selected value="">Strain</option>

    <?php foreach($strain as $item): ?>
      <?php if ($item == "") continue; ?>
      <option<?php e(isset($data['strain']) && $data['strain'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item ?></option>
    <?php endforeach ?>
  </select>
              </li>
              <li class="select-wrapper">
  <select name="potency" onchange="this.form.submit()">
    <option selected value="">Potency</option>

    <?php foreach($potency as $item): ?>
      <?php if($item == "") continue; ?>
      <option<?php e(isset($data['potency']) && $data['potency'] == $item, ' selected') ?> value="<?= $item ?>"><?= $item ?></option>
    <?php endforeach ?>
  </select>
              </li>
          </ul>
</form>

        </section>

        <section id="one">
          <div id="gallery" class="box alt">
            <div class="row uniform 50%">
<?php


// Controller
// $projects = $page->children()->visible();
//$value = 'type';

foreach($projects as $typepage => $items):

//  $typecollection = $projects->groupBy('type'); //Works well
  $typecollection = $projects->groupBy($value);

  foreach($typecollection as $typepage => $typeitems):
      echo '<h4>'.$value.'-'.$typepage.'</h4>';

    foreach($typeitems->sortBy('sort', 'asc') as $image): //Good for alpha title names
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
      echo '<div class="4u"><span class="image fit"><img src="'.$image->image()->url().'" alt="'.$image->image()->caption().'" /></span><p>'.$image->image()->caption().'</p></div>';
    endforeach;

//  echo '<h4>'.$typepage.'</h4>';  // STRAINS/ST03-INDICA
//  echo '<h4>'.$items->title().'</h4>';  // ST03-INDICA

/*
    foreach($items->images()->sortBy('sort', 'asc') as $image): //Good for alpha title names
      echo '<div class="4u"><span class="image fit"><img src="'.$image->url().'" /></span><p>'.$image->caption().'</p></div>';
    endforeach;
*/

  endforeach;

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