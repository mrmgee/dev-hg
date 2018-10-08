<?php if($item->coverimage()->isNotEmpty()): ?>
  <figure class="image fit">
    <img src="<?= $item->coverimage()->toFile()->url() ?>" alt="" />
  </figure>
<?php endif ?>