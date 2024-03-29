<?php 
  include_once './includes/header.php'; 
?>


<?php
    $frutas = ['manzana', 'naranja', 'melon', 'uvas', 'mango'];

    for( $i = 0; $i < count($frutas); $i++  ) {
      echo $frutas[$i] . "<br />";
    }

    foreach($frutas as $fruta) {
      echo $fruta . "<br />";
    }


?>