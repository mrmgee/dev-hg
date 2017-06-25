<div class="4u"><span class="image fit">
<?php if ($data2->picture()->isNotEmpty()): ?>
<img src="<?= $page->image($data2->picture())->url() ?>" alt="<?= $data2->text() ?>" />
<?php endif ?>
</span><p><?= $data2->text() ?></p></div>