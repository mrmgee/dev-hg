<?php

// site/roles/editor.php
return [
  'name'        => 'Editor',
  'default'     => false,
  'permissions' => [
    '*'            => true,
    'panel.site.*' => true,
    'panel.user.*' => false,
    'panel.page.*' => false,

'panel.page.read' => function() {
  if($this->target()->page()->template() === 'blog' ||  $this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'news' ||  $this->target()->page()->template() === 'newsarticle') return true;
  if($this->target()->page()->template() === 'gallerysub' ||  $this->target()->page()->template() === 'galleryitem') return true;
},


'panel.page.update' => function() {
  if($this->target()->page()->template() === 'blog' ||  $this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'news' ||  $this->target()->page()->template() === 'newsarticle') return true;
  if($this->target()->page()->template() === 'gallerysub' ||  $this->target()->page()->template() === 'galleryitem') return true;
},
'panel.page.delete' => function() {
  if($this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'newsarticle') return true;
  if($this->target()->page()->template() === 'gallerysub') return true;
},
'panel.page.create' => function() {
  if($this->target()->page()->template() === 'blog' ||  $this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'news' ||  $this->target()->page()->template() === 'newsarticle') return true;
  if($this->target()->page()->template() === 'gallerysub' ||  $this->target()->page()->template() === 'galleryitem') return true;
},
'panel.page.visibility' => function() {
  if($this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'newsarticle') return true;
  if($this->target()->page()->template() === 'gallerysub') return true;
    if($this->target()->page()->template() === 'galleryitem') return true;
},
'panel.page.sort' => function() {
  if($this->target()->page()->template() === 'article') return true;
  if($this->target()->page()->template() === 'newsarticle') return true;
}
  ]
];
?>