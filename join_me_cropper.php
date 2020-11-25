<?php
  $stars = imagecreatefrompng("ROSA JOIN ME.png");
  $gradient = imagecreatefrompng("pastor_chris.png");
  imagecopymerge($stars, $gradient, 195, 240, 0, 0, 210, 200, 100);
  header('Content-type: image/png');
  imagepng($stars);
  imagedestroy($stars);
  imagedestroy($gradient);
?>