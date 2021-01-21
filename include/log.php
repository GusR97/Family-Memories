<?php 
require 'conexion.php';
session_start();
 $usuario = $_POST['usuario'];
 $clave = $_POST['clave'];
 $rol = "admin";

 $q = "SELECT COUNT(*) as contar from usuarios where loging = '$usuario' and pwd = '$clave' and rol = '$rol'";
 $consulta = mysqli_query($conexion, $q);
 $array = mysqli_fetch_array($consulta);
 
 if($array['contar']>0){
     header("location: ../admin.php");
     $_SESSION['username'] = $usuario;
 }else{
    header("location: ../otro.php");
    $_SESSION['username'] = $usuario;
 }
?>