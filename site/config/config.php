<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/
c::set('license', 'K2-PRO-a4ee2fd2c6428278101e90bab82afadb');
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/


// Shrink large images on upload
kirby()->hook('panel.file.upload', 'shrinkImage');
kirby()->hook('panel.file.replace', 'shrinkImage');
function shrinkImage($file, $maxDimension = 1800) {
  try {
    if ($file->type() == 'image' and ($file->width() > $maxDimension or $file->height() > $maxDimension)) {
      
      // Get original file path
      $originalPath = $file->dir().'/'.$file->filename();
      // Create a thumb and get its path
      $resized = $file->resize($maxDimension,$maxDimension);
      $resizedPath = $resized->dir().'/'.$resized->filename();
      // Replace the original file with the resized one
      copy($resizedPath, $originalPath);
      unlink($resizedPath);
    }
  } catch(Exception $e) {
    return response::error($e->getMessage());
  }
}

/*

---------------------------------------
DATEPICKER CONFIG

DOCUMENTATION: https://github.com/Andi-Lo/kirby-datepicker#options
---------------------------------------

*/
c::set('dp_dateFormat', 'd-m-Y');
c::set("panel.stylesheet", "assets/css/datepicker/yourThemeFile.css");

c::set('dp_enableTime', false);
c::set('dp_noCalendar', false);
c::set('dp_altFormat', 'F j, Y');
c::set('dp_altInput', false);
c::set('dp_altInputClass', '');
c::set('dp_allowInput', false);
c::set('dp_clickOpens',  true);
c::set('dp_defaultDate', '');
c::set('dp_enableSeconds', false);
c::set('dp_hourIncrement', 1);
c::set('dp_minuteIncrement',  5);
c::set('dp_maxDate',  null);
c::set('dp_minDate', null);
c::set('dp_shorthandCurrentMonth', false);
c::set('dp_weekNumbers', false);
c::set('dp_time_24hr',  false);



// Enable Kirby StaticBuilder locally
c::set('staticbuilder', true);
// StaticBuilder requires Kirby’s cache to be disabled
c::set('cache', false);


c::set('debug', true);