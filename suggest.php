<?php
  $file = fopen('input/e'.time().'.txt', 'w');
  fwrite($file, $_POST['suggestion']);
  fclose($file);
?>
