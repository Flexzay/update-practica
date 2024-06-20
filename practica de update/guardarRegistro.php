<?php

include ("usuarioC.php");

$documento = $_GET['doc'];
$nombre = $_GET['nomU'];
$fechaNacimiento = $_GET['fechaN'];
$password = $_GET['contraseña'];



$script = Usuario::guardarUsuario($documento, $nombre, $fechaNacimiento, $password);

if ($script > 0) {
    echo "No fue posible el registro";
} else {
    header("location: consultar_usuario.php?doc=$documento");
}