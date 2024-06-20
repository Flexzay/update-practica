<?php

include ("usuarioC.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba foto</title>

</head>

<body>

    

    <div class="form-container">
        <form action="<?php echo (isset($_GET['doc'])) ? 'actualizar.php' : 'guardarRegistro.php'; ?>" method="get">
            <h2>Formulario de Registro</h2>

            <div class="form-group">
                <label for="doc">Documento</label>
                <input type="text"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(0, $_GET['doc']) : ' '; ?>"
                    name="doc" placeholder="Documento">
            </div>

            <div class="form-group">
                <label for="nomU">Nombres</label>
                <input type="text"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(1, $_GET['doc']) : ' '; ?>"
                    name="nomU" placeholder="Nombres">
            </div>

            <div class="form-group">
                <label for="fechaN">Fecha de Nacimiento</label>
                <input type="date"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(2, $_GET['doc']) : ' '; ?>"
                    name="fechaN">
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(4, $_GET['doc']) : ''; ?>"
                    name="contraseña" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <label for="fotoPerfil">Fotografía</label>
                <img src="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(3, $_GET['doc']) : ' '; ?>"
                    width="120px" alt="Sin Imagen">
            </div>

            <button type="submit"
                class="submit-btn"><?php echo (isset($_GET['doc'])) ? 'Actualizar' : 'Agregar'; ?></button>
        </form>
    </div>
</body>

</html>