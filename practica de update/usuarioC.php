<?php

class Usuario
{

    public static function guardarUsuario($documento, $nombre, $fechaNacimiento, $password)
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'FOTO');

        $sql = "insert into Tb_usuarios (nombre, fec_nac, contraseña,  documento) values ('$nombre', '$fechaNacimiento', '$password' , '$documento')";
        $conexion->query($sql);

        $conexion->affected_rows;

        $conexion->close();
    }


    public static function mostrarDatos()
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'FOTO');

        $sql = "select * from Tb_usuarios ";
        $r = $conexion->query($sql);
        $salida = '';
        while ($fila = $r->fetch_array()) {
            $salida .= '<h1> Documento: ' . $fila[0] . '</h1>';
            $salida .= '<h2> Nombre: ' . $fila[1] . '</h2>';
            $salida .= '<a href="registro_usuario.php?doc=' . $fila[0] . '"> Actualizar </a>';
            $salida .= '<hr>';

        }
        return $salida;

    }

    public static function retornarDatos($des, $documento)
    {

        $conexion = mysqli_connect('localhost', 'root', '', 'FOTO');

        $campo = '';
        $tabla = '';
        $nomCampo = '';
        $identifiacdor = $documento;

        switch ($des) {
            case 0:
                $campo = 'documento';
                $tabla = 'Tb_usuarios';
                $nomCampo = 'documento';

                break;

            case 1:
                $campo = 'nombre';
                $tabla = 'Tb_usuarios';
                $nomCampo = 'documento';

                break;

            case 2:
                $campo = 'fec_nac';
                $tabla = 'Tb_usuarios';
                $nomCampo = 'documento';

                break;

            case 3:
                $campo = 'foto';
                $tabla = 'Tb_usuarios';
                $nomCampo = 'documento';

                break;
            case 4:
                $campo = 'contraseña';
                $tabla = 'Tb_usuarios';
                $nomCampo = 'documento';

                break;

        }

        $sql = "SELECT $campo FROM $tabla WHERE $nomCampo = '$identifiacdor' ";

        $r = $conexion->query($sql);

        while ($fila = $r->fetch_array()) {
            $salida = $fila[0];
        }


        return $salida;

    }


    public static function Actualizar($documento, $nombre, $fechaNacimiento, $password)
    {
        $conexion = mysqli_connect('localhost', 'root', '', 'FOTO');
        $identifiacdor = $documento;

        $sql = "update Tb_usuarios ";
        $sql .= "set documento = '$documento',";
        $sql .= "nombre = '$nombre',";
        $sql .= "fec_nac = '$fechaNacimiento',";
        $sql .= "foto= '',";
        $sql .= "contraseña = '$password'";
        $sql .= "where documento = '$identifiacdor' ";

        $conexion->query($sql);

        $conexion->affected_rows;

        $conexion->close();
    }



}