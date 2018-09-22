<?php
echo page('calendar')->children()->visible()->flip()->feed(array(
    'title'       => $page->title(),
    'description' => $page->text(),
    'link'        => 'calendar',
));
?>