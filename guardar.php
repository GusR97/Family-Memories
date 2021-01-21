<?php
 require 'include/conexion.php';
 if(isset($_POST['guardar'])){
    $id_us = $_POST['id_u'];
    $id_vi = $_POST['id_v'];
    $coment = $_POST['comentario'];
    $fech = $_POST['y-m-d'];
    $usua = $_POST['usuario'];
    $query = "INSERT INTO comentario(id_usuario, id_video, coment, fechaComent,usuario) VALUES ('$id_us', $id_vi', '$coment', '$fech', '$usua')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
    die("fallo");
    }
    header("location: ../comentarios.php"); 
    
}
?>