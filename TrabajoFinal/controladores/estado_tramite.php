<?php
include"conexion.php";
    session_start();
    $id_doc = $_POST['id_doc'];
    $sql="SELECT*FROM general WHERE id_doc='$id_doc'";
    $rs=mysqli_query($cn,$sql);
    if($r = mysqli_fetch_array($rs)){
        $_SESSION["id_doc"]=$r[0];
        header("Location:../vista/consulte_tramite.php");
    }else{
        echo "<div class='alert alert-danger' role='alert'> Documento no encontrado</div>";
    }
?>