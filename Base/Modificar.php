<?php
 require 'conexion.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios where id= $id";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $paterno = $row['ape_paterno'];
        $materno = $row['ape_materno'];
        $usuario = $row['usuario'];
        $pass = $row['contraseña'];
        $tipo = $row['tipo'];
    }
}
if(isset($_POST['update'])){
    $id= $_GET['id'];
    $nombre = $_POST['nombreM'];
    $paterno = $_POST['apePaternoM'];
    $materno = $_POST['apeMaternoM'];
    $usuario = $_POST['usuarioM'];
    $pass = $_POST['contraseñaM'];
    $tipo = $_POST['tipoM'];

    $query = "UPDATE usuarios set nombre = '$nombre', ape_paterno = '$paterno', ape_materno = '$materno', usuario = '$usuario', contraseña = '$pass', tipo = '$tipo' WHERE id = $id";
    mysqli_query($conexion,$query);
    header("location: ../UsuariosA.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script language="javascript" type="text/javascript"
    src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script type="text/javascript"
    src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilos2.css">
<body class="container" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);">
    
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center rounded"
        style="background: linear-gradient(90deg, rgba(255,255,255,.9) 0%, rgba(255,255,255,.9) 45%, rgba(255,255,255,.9) 100%); height: 650px; width: 450px;">
        <br><br>
        <form action="Modificar.php?id=<?php echo $_GET['id'];?>" method="POST">
            <h1>Modificar Usuario</h1>
            <div class="form-group justify-content-center align-items-center">
                <label for="nombre">Nombre</label>
                <input placeholder="Modifique el Nombre" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="nombre" type="text" name="nombreM" value="<?php echo $nombre;?>">
                <label for="apePaterno">Apellido Paterno</label>
                <input placeholder="Modifique el Apellido Paterno" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="apePaterno" type="text" name="apePaternoM" value="<?php echo $paterno;?>">
                <label for="apeMaterno">Apellido Materno</label>
                <input placeholder="Modifique el Apellido Materno" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="apeMaterno" type="text" name="apeMaternoM" value="<?php echo $materno;?>">
                <label for="usuario">Usuario</label>
                <input placeholder="Modifique el Ususario" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="usuario" type="text" name="usuarioM" value="<?php echo $usuario;?>">
                <label for="contraseña">Contraseña</label>
                <input placeholder="Modifique la Contraseña" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="pass" type="password" name="contraseñaM">
                <label for="tipoUsu">Tipo de Usuario </label>
                <input placeholder="Tipo de Usuario" class="form-control rounded-pill shadow  "
                       style="border: 1.5px solid rgba(9,9,121,1);" id="tipo" type="text" name="tipoM" value="<?php echo $tipo;?>">
            </div>

            <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-lg boton3 btn-sm rounded-pill shadow " name="update"><span></span>
                    <span></span>
                    <span></span>
                    <span></span>Modificar</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>