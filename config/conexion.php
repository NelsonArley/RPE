<?php
$server ="localhost";
$user = "root";
$pass = "";
$bd = "proyecto_formativo";
$conexion = new mysqli ($server, $user, $pass, $bd);
if(mysqli_connect_errno()){
    echo"no conectado", mysqli_connect_errno();
    exit();
}else{
    //echo  "conectado";
}

?>