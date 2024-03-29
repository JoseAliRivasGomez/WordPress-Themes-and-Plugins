<?php 
  include_once './includes/header.php'; 
?>

<?php
  $frutas = array('manzana', 'naranja', 'melon', 'uvas');

  $frutas2 = ['manzana', 'naranja', 'melon', 'uvas'];

  array_push($frutas, 'pera');
  unset($frutas[2]);

  echo "<pre>";
  var_dump($frutas2);
  echo "</pre>";


?>