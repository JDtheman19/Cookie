<?php
  $file = fopen('input/e'.time().'.txt', 'w');
  fwrite($file, $_GET['text']);
  fclose($file);
?>
