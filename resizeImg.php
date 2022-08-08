<?php
/* ----------------------------------------------------------------
  DYNAMIC IMAGE RESIZING SCRIPT
  The following script will take an existing JPG image, and resize it
  using set options defined in your .htaccess file (while also providing
  a nice clean URL to use when referencing the images)
  Images will be cached, to reduce overhead, and will be updated only if
  the image is newer than it's cached version.

  The original script is from Timothy Crowe's 'veryraw' website, with
  caching additions added by Trent Davies:
  http://veryraw.com/history/2005/03/image-resizing-with-php/

  Further modifications to include antialiasing, sharpening, gif & png 
  support, plus folder structues for image paths, added by Mike Harding
--------------------------------------------------------------------- */

require_once("current.php");

$image = $_GET["imgfile"];
$max_width = $_GET["max_width"];

Aczel\Initiate::resizeImg($image, $max_width);

