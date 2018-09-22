<?php
return function($site, $pages, $page) {

	if(get('events') == 'past'):
		$events = $page->children()->visible()->sortBy('date', 'desc')->filterBy('date', '<', time());
		elseif(get('events') == 'upcoming'):
		$events = $page->children()->visible()->sortBy('date', 'desc')->filterBy('date', '>=', time());
		elseif(get('events') && strtotime(get('events'))):
		$events = $page->children()->visible()->sortBy('date', 'desc')->filterBy('date', '==', strtotime(get('events')));
		else:
		$events = $page->children()->visible()->sortBy('date', 'desc');
	endif;
return compact('events');
};