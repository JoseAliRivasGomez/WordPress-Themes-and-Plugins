<?php 
  include_once './includes/header.php'; 
?>


<?php
  for( $i = 0; $i <= 100; $i++  ) {
      if($i == 10) {
        echo "El numero es DIEZ <br />";
        break;
      }
      echo "El Numero es " .  $i . "<br />";
  }

?>