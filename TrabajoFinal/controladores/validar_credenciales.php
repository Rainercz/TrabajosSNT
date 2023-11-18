<?php 
    require_once "conexion.php";
    function IniciarSesion($usuario,$clave){
        $con=conectar();
        $sql = "SELECT COUNT(*) as contar FROM trabajadores WHERE usuario='$usuario'and clave='$clave'";
        $consulta = mysqli_query($con,$sql);
        $array = mysqli_fetch_array($consulta);
        return $array;
    }

    function IniciarSesion1($usuario,$clave){
        $con=conectar();
        $sql = "SELECT COUNT(*) as contar FROM trabajadores WHERE usuario='$usuario'and clave='$clave' and oficina = 'recursos humanos'";
        $consulta = mysqli_query($con,$sql);
        $array = mysqli_fetch_array($consulta);

        return $array;
    }

    function Cargo($usuario){
        $con=conectar();
        $sql ="SELECT nombre,cargo FROM trabajadores WHERE usuario='$usuario'";
        $consulta= mysqli_query($con,$sql);
        $array = mysqli_fetch_array($consulta);

        return array($array);
    }
?>