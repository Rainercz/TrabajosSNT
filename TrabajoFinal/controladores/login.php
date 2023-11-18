<?php 
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    include"../controladores/conexion.php";
    //if(!empty($_POST["btningresar"])){
        //if(!empty($_POST["usuario"]) and !empty($_POST["clave"])){
            session_start();
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            $sql="SELECT*FROM trabajadores WHERE usuario='$usuario' and clave='$clave'";
            $rs=mysqli_query($cn,$sql);
            if($r = mysqli_fetch_array($rs)){
                $_SESSION["nombre"]=$r[0];
                $_SESSION["apellidos"]=$r[1];
                $_SESSION["oficina"]=$r[8];
                header("Location:../vista/principal.php ");
            }else{
                echo "Acceso denegado";
            }
        //}
    /*}else{
        echo"mensaje1";
    }*/
    
    /*
        // Iniciar sesión
    $resultado = IniciarSesion($usuario, $clave);
    $array = $resultado;

    if ($array['contar'] > 0) {
        // Restablecer el contador de intentos y redirigir al perfil
        $_SESSION['intentos'] = 0;
        $_SESSION['username'] = $usuario;
        header("Location: ../vista/mesadepartes.php");
    } else {
        // Incrementar el contador de intentos
        if (isset($_SESSION['intentos'])) {
            $_SESSION['intentos']++;
        } else {
            $_SESSION['intentos'] = 1;
        }
            // Verificar si se excedió el número máximo de intentos permitidos
        if ($_SESSION['intentos'] >= 3) {
            // Calcular y guardar el tiempo de bloqueo (5 minutos)
            $_SESSION['bloqueo'] = time() + (5 * 60); // 5 minutos en segundos
            header("Location: ../vistas/Bloqueo.php");
        } else {
            header("Location: ../vistas/SesionError.php");
        }
    }
    // Para verificar si el usuario ha excedido el número máximo de intentos permitidos
    if (isset($_SESSION['intentos'])) {
        if ($_SESSION['intentos'] >= 3) {
            // Calcular el tiempo actual y el tiempo de bloqueo
            $tiempoActual = time();
            $tiempoBloqueo = $_SESSION['bloqueo'];
            // Verifica si el tiempo de bloqueo ya ha pasado
            if ($tiempoActual < $tiempoBloqueo) {
                // El usuario está bloqueado, redirigir a la página de error de bloqueo
                header("Location: ../vistas/Bloqueo.php");
                exit;
            }else {
                // Si el tiempo de bloqueo ha pasado, restablecer los intentos y continuar
                $_SESSION['intentos'] = 0;
                unset($_SESSION['bloqueo']);
            }
        }
    }
    
    // El usuario ya está autenticado, redirigir al perfil
    if (isset($_SESSION['username'])) {
        header("Location: ../vistas/Perfil.php");
        exit;
    }
    */
?>