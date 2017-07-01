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
  return $this->target()->page()->template() == 'blog' || $this->target()->page()->template() == 'article';
},
'panel.page.update' => function() {
  return $this->target()->page()->template() == 'article';
},
'panel.page.delete' => function() {
  return $this->target()->page()->template() == 'article';
},
'panel.page.create' => function() {
  return $this->target()->page()->template() == 'blog';
}

	]
];
?>