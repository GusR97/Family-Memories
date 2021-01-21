<?php
require_once 'Base/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Usuario</title>
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
    <div class="container d-flex justify-content-center rounded"
    style="background: linear-gradient(90deg, rgba(255,255,255,.9) 0%, rgba(255,255,255,.9) 45%, rgba(255,255,255,.9) 100%); height: 500px; width: 650px;">
        <form action="Base/Buscar.php" method="get">
        <h1>Lista de Usuarios</h1>
            <br>
            <table class="table table-secondary table-striped" id="tb1">
                <tr>
                    <td>Nombre</td>
                    <td>A.Paterno</td>
                    <td>A.Materno</td>
                    <td>Usuario</td>
                    <td>Tipo</td>
                </tr>

                <?php

                require 'Base/conexion.php';
                $qu = "SELECT nombre, ape_paterno, ape_materno, usuario, tipo FROM usuarios";
                $resulta = mysqli_query($conexion, $qu);
                while($row=mysqli_fetch_array($resulta)){

                ?>
                <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['ape_paterno'] ?></td>
                    <td><?php echo $row['ape_materno'] ?></td>
                    <td><?php echo $row['usuario'] ?></td>
                    <td><?php echo $row['tipo'] ?></td>
                </tr>
                <?php
            }
                ?>
            </table>
        </form>
    </div>
</div>
    
</body>
</html>