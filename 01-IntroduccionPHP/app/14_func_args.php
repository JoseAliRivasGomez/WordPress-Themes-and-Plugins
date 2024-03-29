<?php 
  include_once './includes/header.php'; 
?>

<?php
  function saludar($nombre) {
    echo "Bienvenido al sitio {$nombre} <br />";
  }
  saludar("Miguel");
  saludar("Pedro");
  saludar("Karen");

  function suma($num1 = 0, $num2 = 0) {
    echo $num1 + $num2 . "<br />";
  }

  suma(10, 20);
  suma(1, 2);
  suma(2, 2);
  suma(3, 4);

?>