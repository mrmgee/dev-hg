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

<style type="text/css">
  .imgcap {
    width: 100%;
    position: absolute;
    bottom: 0.5%;
    left: 50%;
    transform: translate( -50%, 100%);
    text-align: left;
    padding: 0 0 0 0.5em;
/*    border-top: solid 2px #fff;*/
/*    background: rgba(144, 144, 144, 0.7);*/
    background: rgba(255, 255, 255, 0.7);
    color: #000;
    font-weight: 500;

  }
  .sativa, .Sativa {
    border-bottom: solid 3px #239ed7;
  }
  .indica, .Indica {
    border-bottom: solid 3px #bd2ee6;
  }
  .hybrid, .Hybrid {
    border-bottom: solid 3px #ff3366;
  }
</style>        
<?php
// Controller
// $projects = $page->children()->visible();
//$value = 'type';
//featnum
$featcount = 1;


$arr = get_object_vars($projects);  //cast Object to array
$chkarr = array_filter($arr); //iterates over each array value


//dump($arr);

if (!$chkarr) {
// if ($projects == false) {
  echo '<p>No matches</p>';
} else {
echo '<!-- Matches below -->';

//Good below
foreach($projects as $featureditem):

    if ($featureditem->featured()->int() == 1) {
      if ( $featcount == 1) {
        echo '<h4>Featured</h4>';
      } else {
        echo '<!-- already header -->';
      }

      if ($featcount <= $featnum) {
  //    echo '<h4>'.$featureditem->title().'</h4>';
      echo '<div class="3u"><span class="image fit"><img src="'.$featureditem->image()->url().'" alt="'.$featureditem->image()->caption().'" /><p class="imgcap '.$featureditem->strain()->value().'">Strawberry '.$featureditem->image()->caption().'</p></span></div>';
echo '<!-- featcount/featnum: '.$featcount.'/'.$featnum.' -->';  //Testing
        $featcount++;
      } else {
        echo '<!-- NOT featcount -->';
      }
    } else {
      echo '<!-- NOT featured -->';
    }
endforeach;



foreach($projects as $typepage => $items):

//  $typecollection = $projects->groupBy('type'); //Works well
  $typecollection = $projects->groupBy($value);

  foreach($typecollection as $typepage => $typeitems):
      echo '<h4>'.$value.'-'.$typepage.'</h4>';

    foreach($typeitems->sortBy('sort', 'asc') as $image): //Good for alpha title names
echo '<!-- title:'.$image->page()->title()->html().' -->'; //TESTING
      echo '<div class="4u"><span class="image fit"><a href="'.$image->url().'"><img src="'.$image->image()->url().'" alt="'.$image->image()->caption().'" /></a><p class="imgcap '.$image->strain()->value().'">'.$image->image()->page()->title().'</p></span></div>';
    endforeach;

  endforeach;

endforeach;



} //end check array empty
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