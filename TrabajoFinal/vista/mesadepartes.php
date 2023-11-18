<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa de partes</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light">
            <div class="text-white bg-warning p-2">
                <?php
                session_start();
                ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <img src="../recursos/Siscod_blanco-removebg-preview.png" alt="logo">
            </div>
</nav>
<form action="../logica/login.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="clave" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
    <a class="nav-item nav-link text-justify ml-3 hover-primary"href="../controladores/cerrarsesion.php">salir</a>
</form>
</body>
</html>