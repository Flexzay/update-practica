<?php

include ("usuarioC.php");


$documento = $_GET['doc'];
$nombre = $_GET['nomU'];
$fechaNacimiento = $_GET['fechaN'];
$password = $_GET['contraseña'];

$respuesta = Usuario::Actualizar($documento, $nombre, $fechaNacimiento, $password);

if ($respuesta != 0) {
    header('location: consultar_usuario.php');
} else {
    
}