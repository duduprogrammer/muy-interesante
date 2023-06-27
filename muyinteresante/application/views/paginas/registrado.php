<?php









  require 'conexion.php';
  session_destroy();
  session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];


    $q = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')";
    if ($conexion->query($q) === TRUE) {
      header("location: ../inicio/login");
    } else {
      echo "Error: " . $q . "<br>" . $conexion->error;
    }
       











   
?>
