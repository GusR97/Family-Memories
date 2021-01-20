<?php
 require 'conexion.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios where id= $id";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $paterno = $row['apePaterno'];
        $materno = $row['apeMaterno'];
        $usuario = $row['usuario'];
        $pass = $row['pass'];
        $tipo = $row['tipo'];
    }
}
if(isset($_POST['update'])){
    $id= $_GET['id'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['apePaterno'];
    $materno = $_POST['apeMaterno'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $tipo = $_POST['tipo'];

    $query = "UPDATE usuarios set nombre = '$nombre', ape_paterno = '$paterno', ape_materno = '$materno', usuario = '$usuario', contraseña = '$pass', tipo = '$tipo' WHERE id_ganancias = $id";
    mysqli_query($conexion,$query);
    header("location: ../BuscaUsu.html");
}
?>