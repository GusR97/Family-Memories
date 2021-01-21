<!DOCTYPE html>
<html lang="en">
<head>
<style>
      
#plano{
    height: 900px;
    margin-top: 0px;
    padding-top: 10px;
    padding-right: 50px;
    padding-left: 50px;
    background-color: rgb(201, 159, 255);
  }
  #c1{
      height: 100%;
    background-color: white; 
    margin: 50px;
    margin-top: 10px;
    margin-bottom: 0px;
    padding: 100px;
    text-align: center;
  }
  #jb1{
      margin-top: 30px;
      margin-bottom: 0px;
      height: 180px;
  }
  #ch{
      font-size: 30px;
  }
  #cb{
      font-size: 20px;
      text-align: justify;
  }
  #cf{
      font-size: 20px;
  }
  #tb1{
     visibility: hidden;
  }
  #btn2{
    visibility: hidden;
  }
  </style>      
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
<div class="container d-flex justify-content-center align-items-center rounded" 
style="background: linear-gradient(90deg,
rgba(255,255,255,.9) 0%,
rgba(255,255,255,.9) 45%,
rgba(255,255,255,.9) 100%);
height: 50px; width: 1150px;">

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-home"></i></i>Home</button>

<button onclick="window.location.href='buscar.php'" style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span> 
<a href="buscar.php"></a> 
<i class="fas fa-video"></i>Videos</button>

<button onclick="window.location.href='usuarios.php'" style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-user"></i></i>Usuarios</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-user"></i>Mi perfil</button>

<button style="margin: 3px;" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>  
<i class="fas fa-sign-in-alt"></i></i>Cerrar sesion</button>

</div>
</div>

<br>

<div class="container"> 
    <!-- Contenedor para video-->     
<div class="contenido"       
style="background: linear-gradient(90deg,
rgba(255,255,255,.9) 0%,
rgba(255,255,255,.9) 45%,
rgba(255,255,255,.9) 100%);
height:660px; width: 700px;">&nbsp;

<h2><p class="p-2 bg-primary text-white" style="text-align: center;">Ver video</p></h2>
<h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Titulo del video:  Mexico</strong></h6>
<h7><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Categoria del video: viajes</strong></h7>

<div style="margin: 20px;">
<video style="float:right;" src="videos/video1.mp4" height="300px" width="480px" controls poster="imagenes/videoPlay.jpg"> </video>
<br>
Esta es una pequeña descripcion de un video en el cual se observa la cultura y los paisajes mas turisticos de 
Mexico</div>

  <br>
  <br>
  <br>
  <br>
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="window.location.href='buscar.php'" type="submit"  class="btn btn-lg boton3 btn-sm rounded-pill shadow ">
<span></span>
<i class="fas fa-sign-in-alt"></i></i>Regresar</button>

</div>
  
<!-- Contenedor para comentarios-->
<div class="contenido" 
style="background: linear-gradient(90deg,
rgba(255,255,255,.9) 0%,
rgba(255,255,255,.9) 45%,
rgba(255,255,255,.9) 100%);
height:660px; width: 340px;">&nbsp;
<h2><p class="p-2 bg-primary text-white" style="text-align: center;">Comentarios</p></h2>
<br>


  
        <button type="button" class="btn btn-primary btn-block" id="btnl" 
        onClick="document.getElementById('tb1').style.visibility = 'visible'; 
        document.getElementById('btnl').style.visibility = 'hidden'; 
        document.getElementById('btn2').style.visibility = 'visible'; 
        document.getElementById('card1').style.display = 'block';">Mostrar Comentarios</button>

        <button type="button" class="btn btn-primary btn-block" id="btn2"
         onClick="document.getElementById('tb1').style.visibility = 'hidden'; 
         document.getElementById('btn2').style.visibility = 'hidden';
         document.getElementById('btnl').style.visibility = 'visible';
         document.getElementById('card1').style.display = 'none';">Ocultar Comentarios</button>

        <table  class="table table-dark table-striped" id="tb1">

<tr>
    <th scope="col">Usuario</th>
    <th scope="col">Comentario</th>
    <th scope="col">Fecha</th>
    
</tr>

<?php
     require 'include/conexion.php';
     $sql = "SELECT usuario,coment,fechaComent FROM comentario";
    $result = mysqli_query($conexion, $sql);
    while($valor=mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $valor['usuario'] ?></td>
    <td><?php echo $valor['coment'] ?></td>
    <td><?php echo $valor['fechaComent'] ?></td>
    
    
</tr>
<?php
}
?>
</table>

<div class="card card-body" style="display:none;" id="card1">
<form action="guardar.php" method="POST">

<div class="form-group" style="display:none;">
<input type="text" name="id_u" class="form-control" value="2" autofocus>
</div>

<div class="form-group" style="display:none;">
<input type="text" name="id_v" class="form-control" value="2" autofocus>
</div>

<div class="form-group">
<input type="text" name="comentario" class="form-control" placeholder="Ingresa algún comentario">
</div>

<div class="form-group" style="display:none;">
<input type="text" name="usuario" class="form-control" value="ramon" >
</div>


<div class="form-group" style="display:none;">
<input type="text" name="fecha" class="form-control">
</div>

<input type="submit" class="btn btn-success btn-block" name="guardar" value="Comentar">
</form>
</div>
   
            
        </div>

</div>






</body>
</html>