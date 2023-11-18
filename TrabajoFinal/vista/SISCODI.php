<?php
session_start();                  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCODI</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous"></head>
<body>
    <div class="contenedor">
        <!--Navegacion-->
        <div>
            <img src="../recursos/Siscod_blanco-removebg-preview.png" alt="" >
        </div>
        <div class="cont">
            <!-- INFORMACION PANTALLA -->
            <div class="lados">
                <h1>SISTEMA DE CONTROL <br> DOCUMENTARIO <br>(SISCODI)</h1>
                <p> El presente sistema nos ayudara a tener
                    un mejor manejo de la documentacion <br> 
                    presentada por parte de los usuarios 
                </p>
                <ul class="ul-list-slider Open-sansR">
                    <li>Firma Digital con Valor Legal</li>
                    <li>Seguridad de la informacion  </li>
                    <li>Cero papel</li>
                </ul>
                <!-- Botoon consulta tramite -->
                <button type="button" class="btn btn-warning border-light text-light fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Consulte Su Tramite
                </button>
                <!-- Ventana Emergente -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="text-dark" id="exampleModalLabel">CONSULTE SU TRAMITE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="d-flex" action="../controladores/estado_tramite.php" method="POST">
                                    <input class="form-control me-2" type="search" placeholder="Ingrese Codigo" aria-label="Search" name="id_doc">
                                    <button class="btn btn-outline-warning" type="submit">Consultar</button>
                                    <? include("../controladores/estado_tramite.php")?>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FORMULARIO INICIO DE SESION -->
            <div class="login">
                <form action="../controladores/login.php" method="POST">
                    <div class="bg-secondary p-4 rounded" style="--bs-bg-opacity: .5;">
                        <div class="text-center fs-2 fw-bold">
                            Iniciar Sesion
                        </div>
                        
                        <div class="input-group mt-5">
                            <input class="form-control" type="text" placeholder="Usuario" name="usuario" require />
                        </div>
                        <div class="input-group mt-2">
                            <input class="form-control" type="password" placeholder="Contraseña" name="clave" require/>
                        </div>
                        <div class="view">
                            <div class="fas fa-eye verPassword" onclik="vista()" id=verPassword> </div>
                        </div>
                        <div>
                            <a href="#" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.8rem;">Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit"  class="btn btn-light text-light fw-bold w-100 mt-3 bg-warning" name="btningresar"> Iniciar Sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Formulario Mesa de Partes-->
    <div class="contenedor"
            style="background-color: rgb(181, 175, 107 )">
        <div class="container">
            <center class="container-fluid d-block">
                <label class="h3 text-light fw-bold m-3">FORMULARIO MESA DE PARTES <br>_________________________</label>
            </center>
            <form action="">
                <div class="d-flex m-3 p-3">
                    <div class="container">
                        <label class="h5 fw-bold px-2">Datos Personales: <br>__________</label> 
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light" >Nombres y Apellidos:</span>
                            <input type="text"  class="form-control" placeholder="Nombres...">
                            <input type="text" class="form-control rounded-end" placeholder="Apellidos...">
                            <br>
                        </div>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input input-group-text bg-dark text-light w-25" id="addon-wrapping">Correo:</span>
                            <input type="text" class="form-control" placeholder="Correo">
                        </div>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light w-25" id="addon-wrapping">DNI:</span>
                            <input type="number" class="form-control" placeholder="DNI">
                        </div>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light w-25" id="addon-wrapping">Celular:</span>
                            <input type="number" class="form-control" placeholder="Celular">
                        </div>
                        <input type="submit" class="btn btn-light text-light fw-bold w-100 bg-warning mb-3 mt-4 px-2 p-3" style="font-size: 1.2 rem" value="ENVIAR">
                    </div>
                    <div>
                        <label class="h5 fw-bold px-2">Datos Documento: <br>__________</label><br>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light" id="addon-wrapping">Tipo de Documento:</span>
                            <select name="documentos" id="" class="form-control">
                                <option value="informe">Informe</option>
                                <option value="solicitud">Solicitud</option>
                                <option value="carta">Carta</option>
                            </select>
                        </div>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light w-25" id="addon-wrapping">Oficina:</span>
                            <select name="oficina" id="" class="form-control" >
                                <option value="informe">Recursos Humanos</option>
                                <option value="solicitud">Gerencia</option>
                            </select>
                        </div>
                        <div class="input-group mb-3 w-100 px-2">
                            <span class="input-group-text bg-dark text-light w-25" id="addon-wrapping">Asunto:</span>
                            <input type="text" class="form-control" placeholder="Asunto">
                            <textarea placeholder="Mensaje..." class="w-100 mt-3 border" rows="3"></textarea><br>
                            <input type="file" class="mt-4 w-100 px-2"><br>
                            <input type="checkbox" class="mt-1">Estoy de acuerdo en que los datos enviados son reales
                        </div>
                    </div>
                </div>
            </form>        
        </div>
    </div>
    <!--Footer-->
    <div class="container-fluid bg-dark">
        <footer class="py-3">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
            </ul>
            <p class="text-center text-light">© 2023 Company, Inc</p>
        </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>