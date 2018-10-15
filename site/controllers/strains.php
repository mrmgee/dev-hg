<?php

return function($site, $pages, $page) {

  $type = $page->children()->pluck('type', null, true);
  $strain = $page->children()->pluck('strain', null, true);
  $potency = $page->children()->pluck('potency', null, true);
  $keys = array('type', 'strain', 'potency');
  $featnum  = $page->featnum()->int();

  // return all children if nothing is selected
  $projects = $page->children()->visible(); //orig
  // $projects = $page->children()->visible()->groupBy('type');

  $value = 'type';


  // if there is a post request, filter the projects collection
  if(r::is('POST') && $data = get()) {
  	$projects = $page->children()->visible()->filter(function($child) use($keys, $data) {

      // loop through the post request
      foreach($data as $key => $value) {

        // only act if the value is not empty and the key is valid
        if($value && in_array($key, $keys)) {
echo '<!-- key:'.$key.'-value:'.$value.' -->';  // <!-- key:type-value:concentrate -->
          // return false if the child page's category and value don't match
          if(!$match = $child->$key() == $value) {
            return false;
          }
        }
      }

      // otherwise return the child page
      return $child;
      return $value;
    });
  }
  return compact('projects', 'type', 'strain', 'potency', 'data', 'value', 'featnum');
};
