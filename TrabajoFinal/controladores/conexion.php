<?php 
    /*date_default_timezone_set('America/Lima');
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";
        $bd="db_siscodi";

        $con=mysqli_connect($host,$user,$pass);
        mysqli_select_db($con,$bd);
        return $con;
    }
    */

    $cn=new mysqli("localhost","root","","db_siscodi");
    $cn->set_charset("utf8");
?>