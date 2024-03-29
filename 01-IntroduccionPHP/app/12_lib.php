<?php 
  include_once './includes/header.php'; 
?>

<?php
    $frutas = ['manzana', 'naranja', 'melon', 'uvas'];

    echo count($frutas);

    echo "<br />";

    $mi_nombre = "Juan Pablo De la torre";

    echo strtoupper($mi_nombre);
    echo "<br />";
    echo strtolower($mi_nombre);

    echo "<br />";

    $password = "      passwordpasswordpasswordpasswordpassword    ";

    if(strlen(trim($password)) < 10) {
      echo "El password es muy debil";
    } else {
      echo "el password es muy fuerte";
    }

?>