<?php
 require 'conexion.php';
 if(isset($_POST['guardar'])){
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $query = "INSERT INTO automovil(marca, modelo, precio) VALUES ('$marca', '$modelo', '$precio')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("fallo");
    }
    header("location: ../admin.php");
    
}
?>