<?php foreach($pages->visible() as $section):
  if($section->uid() == 'footer'):
    snippet($section->uid(), array('data' => $section));
  endif;
endforeach
?>