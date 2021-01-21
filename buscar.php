<!DOCTYPE html>
<html lang="en">
<head>
            
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilos2.css">

<body class="container" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);">

<div class="container">         
<div class="" 
style="background: linear-gradient(90deg,
rgba(255,255,255,.9) 0%,
rgba(255,255,255,.9) 45%,
rgba(255,255,255,.9) 100%);
height: 50px; width: 1100px;">

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-home"></i></i>Home</button>

<button onclick="window.location.href='buscar.php'" style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-video"></i></i>Videos</button>

<button onclick="window.location.href='usuarios.php'" style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-user"></i></i>Usuarios</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-user"></i></i>Mi perfil</button>

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-sign-in-alt"></i></i>Cerrar sesion</button>

</div>
</div>

<br>

<div class="container">         
<div class="container d-flex justify-content-center" 
style="background: linear-gradient(90deg, rgba(255,255,255,.9) 0%,
 rgba(255,255,255,.9) 45%, rgba(255,255,255,.9) 100%);
  height: 530px; width: 1000px;">

 <form>
          
<br>
<h1>Ver Videos<i class="fas fa-search"></i>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp; <img src="imagenes/imagen1.png"></h1>

<div class="form-inline">

</div>
<br>
<br>
        <table  class="table table-dark table-striped">

        <tr>
            <td>Titulo</td>
            <td>Fecha</td>
            <td>Categoria</td>
            <td>Usuario</td>
            <td>Comentario</td>
            <td>Gestionar</td>
        </tr>

        <?php
             require 'include/conexion.php';
             $sql = "SELECT * FROM video";
            $result = mysqli_query($conexion, $sql);
            while($valor=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $valor['titulo'] ?></td>
            <td><?php echo $valor['fecha'] ?></td>
            <td><?php echo $valor['categoria'] ?></td>
            <td><?php echo $valor['usuario'] ?></td>
            <td><?php echo $valor['comentarios'] ?></td>
            <td><button onclick="window.location.href='comentario.php'" type="button" class="btn btn-info">Ver</button></td>
            
        </tr>
        <?php
        }
        ?>
        </table>
    </div>

</form>


</div>
</div>


</body>
</html>