<?php
 require_once 'conexion.php';
    $nombre = $_POST['nombreC'];
    $paterno = $_POST['apePaternoC'];
    $materno = $_POST['apeMaternoC'];
    $usuario = $_POST['usuarioC'];
    $contraseña = $_POST['passC'];
    $tipo = $_POST['tipoC'];

    $query = "INSERT INTO usuarios(nombre, ape_paterno, ape_materno,usuario,contraseña,tipo) VALUES ('$nombre', '$paterno', '$materno','$usuario','$contraseña','$tipo')";
    echo  $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("Location:../BuscaUsu.html");
?>