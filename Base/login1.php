<?php 
require 'conexion.php';
session_start();
 $usuario = $_POST['usuario'];
 $pass = $_POST['contraseña'];
 $tipo = "Admin";
 $tipo2="Usuario";


 $query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '".$usuario."' and contraseña ='".$pass."' and tipo = '".$tipo."'");
 $nr = mysqli_num_rows($query);

    if($nr == 1)
    {
        header("location: ../CrearUsuario.html");
        $_SESSION['username'] = $nombre;
        
    }else if ($nr ==0)
    {
        header("Location:../login.html");
    }
 
    $q= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '".$usuario."' and contraseña ='".$pass."' and tipo = '".$tipo2."'");
    $n = mysqli_num_rows($q);
    if($n == 1)
    {
        header("location: ../Ususarios.php");
        $_SESSION['username'] = $nombre;
    }
 
?>