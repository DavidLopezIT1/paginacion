<?php


$conection = mysqli_connect("localhost", "root", "", "test");

if($conection->connect_errno){
    die("Conexión Fallida");
}else{
    echo "CONEXION EXITOSA";
}
?>