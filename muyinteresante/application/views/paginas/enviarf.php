<?php
require 'conexion.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO formulario (nombre, correo, mensaje) VALUES ('$nombre','$correo','$mensaje')";
$resul = mysqli_query($conexion, $sql);
?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Felicitaciones!</h4>
  <p>El formulario ha sido enviado de manera exitosa</p>
  <hr>
  <p class="mb-0">En breve estaremos respondiendo a tu correo.</p>
</div>
