<?php
session_start();
session_destroy();
header("Location:../vista/SISCODI.php");
?>