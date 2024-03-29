<?php 
  include_once './includes/header.php'; 
?>

<?php
    $estudiante = [
      'nombre' => 'Juan',
      'apellido' => 'De la torre',
      'pais' => 'México',
      'edad' => 18,
      'autenticado' => true
    ];

    echo "<h1> Hola! " . $estudiante['nombre'] . "</h1>";

?>

<h1>Hola! <?php echo $estudiante['nombre']; ?></h1>