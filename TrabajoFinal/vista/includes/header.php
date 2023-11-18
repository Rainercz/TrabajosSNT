<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title>BIENVENIDO</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand text-light">
                    <?php
                    session_start();
                    $oficina=$_SESSION['oficina'];
                    $nombre = $_SESSION['nombre'];
                    $apellidos = $_SESSION['apellidos'];
                    ?>
                    <h2 class="navbar-brand text-light"><?php echo "|".$oficina."|"." "?>BIENVENIDO Sr.  <?php echo $nombre." ".$apellidos?></h2>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">BUSCAR</button>
                <a class="btn btn-outline-warning"href="../controladores/cerrarsesion.php">CERRAR SESION</a>
            </form>
        </div>
    </nav>