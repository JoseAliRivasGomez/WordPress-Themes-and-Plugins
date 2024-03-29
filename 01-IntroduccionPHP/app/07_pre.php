<?php 
  include_once './includes/header.php'; 
?>

<?php
    $frutas = array('manzana', 'naranja', 'melon', 'uvas');

    $estudiante = [
      'nombre' => 'Juan',
      'apellido' => 'De la torre',
      'pais' => 'México',
      'edad' => 18,
      'autenticado' => true
    ];

    echo "<pre>";
    var_dump($estudiante);
    echo "</pre>";

    echo "<pre>";
    print_r($estudiante);
    echo "</pre>";
?>