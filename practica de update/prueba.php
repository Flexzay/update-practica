<?php
include("usuarioC.php");
?>

FOTO: <br>
<img src="<?php echo Usuario::retornarDatos(3, '12121') ?>" width="120px" alt="perfil">

<h3>Documento: </h3> <?php echo Usuario::retornarDatos(0, '12121') ?>
<h3>Nombre:</h3> <?php echo Usuario::retornarDatos(1, '12121') ?>
<h3>Fecha: </h3> <?php echo Usuario::retornarDatos(2, '12121') ?>

<hr>

FOTO: <br>
<img src="<?php echo Usuario::retornarDatos(3, '3r2r3') ?>" width="120px" alt="perfil">

<h3>Documento: </h3> <?php echo Usuario::retornarDatos(0, '3r2r3') ?>
<h3>Nombre:</h3> <?php echo Usuario::retornarDatos(1, '3r2r3') ?>
<h3>Fecha: </h3> <?php echo Usuario::retornarDatos(2, '3r2r3') ?>
