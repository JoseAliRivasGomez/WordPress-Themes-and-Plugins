<?php 
  include_once './includes/header.php'; 
?>

<?php

  $numero_1 = 20;
  $numero_2 = 20;

  if($numero_1 > 10) {
    echo "Si es mayor a 10";
  } else if($numero_1 > 5) {
    echo "Si es mayor a 5";
  } else {
    echo "No es mayor";
  }

?>