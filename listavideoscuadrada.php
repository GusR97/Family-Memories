
<?php
require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');





echo
"<body  class='d-flex  flex-wrap' style='background: rgb(2,0,36);".
"background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);'>";


$sql = "SELECT id_video,fecha,titulo,categoria,descripcion,ubicacion,usuario FROM videos  ORDER BY id_video";
$link = mysqli_connect("localhost", "root", "", "videos");
$resultado=mysqli_query( $link,$sql);



if($resultado->num_rows>0){


  while($fila = $resultado->fetch_assoc()){








 echo
    "<div class='d-flex flex-row ' style=' width: 200px; height: 500px;'>".
    "<div class='card m-3'  style='width: 200px; text-align: center; color: rgba(9,9,121);'>".
    "    <div id='reproductor' class='d-flex video-player align-self-center card-img-top' style=' width: 160px; height: 150px; 'text-align:center; '>\n" .
    "      <div class='video-topbar'>\n" .
    "        Preview\n" .
    "      </div>\n" .
    "      <video id='reproductor_video' class='align-self-center'\n" .
    "        src=".$fila['ubicacion']."></video>\n" .
    "      <div class='video-controls'>\n" .
    "        <div class='video-top-controls'>\n" .
    "          <div class='video-seekbar seekbar'>\n" .
    "            <span class='progress'></span>\n" .
    "          </div>\n" .
    "        </div>\n" .
    "        <div class='video-playback-controls'>\n" .
    "          <button class='control-btn toggle-play-pause play'>\n" .
    "            <i class='fas fa-play play-icon icon'></i>\n" .
    "            <i class='fas fa-pause pause-icon icon'></i>\n" .
    "          </button>\n" .
    "          <div class='video-volume-control'>\n" .
    "            <button class='control-btn toggle-volume on'>\n" .
    "              <i class='fas fa-volume-up icon volume-on'></i>\n" .
    "              <i class='fas fa-volume-mute icon volume-off'></i>\n" .
    "            </button>\n" .
    "            <div class='volume-seekbar seekbar'>\n" .
    "              <span class='progress'></span>\n" .
    "            </div>\n" .
    "          </div>\n" .
    "          <div class='video-timings'>\n" .
    "            <div class='start-time time'>00:00:00</div>\n" .
    "            <div class='end-time time'>00:00:00</div>\n" .
    "          </div>\n" .
    "        </div>\n" .
    "      </div>\n" .
      "      </div>\n" .
    "<div class='card-body '>".
    "<h5 class='card-title'>".$fila['titulo']."</h5>".
    "<p class='card-text'>".$fila['descripcion'].".</p>".
    "</div>".
    "<ul class='list-group list-group-flush' '>".
    "<li class='list-group-item'>".$fila['categoria']."</li>".
    "<li class='list-group-item'>".$fila['usuario']."</li>".
    "<li class='list-group-item'>".$fila['fecha']."</li>".
    "</ul>".
    "<div class='card-body d-flex flex-nowrap justify-content-center'>".
    "<button href='ver_video.php?id=".$fila['id_video']." type='submit'  class='btn btn-lg boton3 btn-sm rounded-pill shadow'><span></span>".
    "<span></span>".
    "<span></span>      ".
    "<span></span>  <i class='fas fa-sign-in-alt'></i></i>Ver</button>".
    "    </div>".
    "  </div>".
    "</div>";
             
              
         
            }
  
          }


echo "</body>";



require('footer.php');
?>