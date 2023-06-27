<?php


session_start();

$usuario = $_SESSION['username'];


if(!isset($usuario))
{
    location("location: login.php")
}
echo "<h1>Bienvenido $usuario </h1>"








?>