
<?php

require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');

echo 

"<body class='container' style='height: auto; background: rgb(2,0,36);".
"background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);'>".
"  <div class='container rounded' style='background: white; height: fit-content; width: 85%;'>".
"    <div class='row'>".
"      <div class='col-lg-12'>".
"        <h1 style='text-align: center;'>Buscar Videos <i class='fas fa-search'></i></h1>".
"        <br>".
"        <div class='main-box clearfix'>".
"          <div class='input-group mb-3'>".
"<form action='#' class='d-flex justify-items-center' name='filtro' style='width: 85%;' method='GET'>".
"            <input name='busqueda' placeholder='Busca Videos' class='form-control rounded-pill shadow ' id='nombre' type='text'>".
"            <div class='input-group-append'>".

"              <button type='submit' class='btn btn-outline-secondary rounded-pill boton3' name='submit'>Buscar</button>".
"            </div>".
"</form>".
"          </div>".
"          <div class='table-responsive rounded'>".
"            <table id='tablita' class='table table-bordered user-list rounded' style='text-align: center;'>".
"              <thead>".
"                <tr>".
"                  <th class='rounded'><span>Video</span></th>".
"                  <th class='rounded'><span>Fecha</span></th>".
"                  <th class='rounded'><span>Titulo</span></th>".
"                  <th class='rounded'><span>Descripcion</span></th>".
"                  <th class='rounded'><span>Autor</span></th>".
"                  <th class='rounded'><span>No. Comentarios</span></th>".
"                </tr>".
"              </thead>".
"              <tbody>";




if(isset($_GET['submit'])){
$busqueda=$_GET['busqueda'];


  $sql = "SELECT id_video,fecha,titulo,categoria,descripcion,usuario FROM videos WHERE fecha='$busqueda' || titulo='$busqueda' || categoria='$busqueda' || descripcion='$busqueda' || usuario='$busqueda' ORDER BY id_video";
  $link = mysqli_connect("localhost", "root", "", "videos");
  $resultado=mysqli_query( $link,$sql);


  if($resultado->num_rows>0){


    while($fila = $resultado->fetch_assoc()){
    echo "
    
                <tr>
                  <td>".$fila['fecha']."</td>
                  <td>".$fila['titulo']."</td>
                  <td>".$fila['categoria']."</td>
                  <td>".$fila['descripcion']."</td>
                  <td>".$fila['usuario']."</td>
    
                  <td>
                  <a class='btn btn-labeled btn-info round boton3' style='text-align:center;font-size:22px;' href='ver_video.php?id=".$fila['id_video']."'> <i class='fa fa-eye' aria-hidden='true'></i>  Ver Video</a>
                  </td>
    
                </tr>";
              }
         
            }

        
  
}else{

$sql = "SELECT id_video,fecha,titulo,categoria,descripcion,usuario FROM videos  ORDER BY id_video";
$link = mysqli_connect("localhost", "root", "", "videos");
$resultado=mysqli_query( $link,$sql);

echo "<script> 

$('#tablita tbody').empty();

</script>";
















if($resultado->num_rows>0){


while($fila = $resultado->fetch_assoc()){
echo "

            <tr>
              <td>".$fila['fecha']."</td>
              <td>".$fila['titulo']."</td>
              <td>".$fila['categoria']."</td>
              <td>".$fila['descripcion']."</td>
              <td>".$fila['usuario']."</td>

              <td>
              <a class='btn btn-labeled btn-info round boton3' style='text-align:center;font-size:22px;' href='ver_video.php?id=".$fila['id_video']."'> <i class='fa fa-eye' aria-hidden='true'></i>  Ver Video</a>
              </td>

            </tr>";
          }

        }

      
      }  



echo
"                </tr>".
"              </tbody>".
"            </table>".
"          </div>".
"          <br>".
"        </div>".
"      </div>".
"    </div>".
"  </div>";
"  </body>";

require('footer.php');
?>