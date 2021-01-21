<?php
require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');



$cargaelid=$_GET['id'];   
$cargaregistro = new ModeloVideo();
$cargavideo=$cargaregistro->verVideo($cargaelid);
$titulo=$cargavideo->getTitulo();
$descripcion=$cargavideo->getDescripcion();
$ubicacion=$cargavideo->getUbicacion();

if(isset($_POST['eliminar'])){




    $registro = new ModeloVideo();
    $variable=$registro->eliminarVideo($cargaelid);
    





}


echo 

"<body class='container d-flex flex-column justify-content-center align-items-center align-content-center mt-0 ' style='background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%); height: 100%; width: 100%; padding: 0%;margin: 0%; '>".
"<div class='container d-flex flex-column align-self-center'>".
"<h1 class='texto-video' style='text-align: center; color: white;'>Desea Eliminar el video?</h1>".
"<div class='d-flex flex-row rounded justify-content-between mr-auto p-2' style='background-color: white; height: 70%;'>".
"<div class='align-self-start   rounded mr-auto p-2' style=' height:100%;'>".
"<div class='d-flex flex-column justify-content-between  flex-nowrap rounded mr-auto p-2'  style='width: 350px; height:100%; text-align: center;'>".
"<div class='texto-video' name='titulo' >'.$titulo.'</div>  ".
"<div class='texto-video' name='descripcion'>'.$descripcion.'</div>      ".
"</div>".
"</div>".
"<div class='video-player'>".
"        <div  name='titulo class='video-topbar'>".
"        </div>".
"        <video name='video' src='.$ubicacion.'></video>".
"        <div class='video-controls'>".
"          <div class='video-top-controls'>".
"            <div class='video-seekbar seekbar'>".
"              <span class='progress'></span>".
"            </div>".
"          </div>".
"          <div class='video-playback-controls'>".
"            <button class='control-btn toggle-play-pause play'>".
"              <i class='fas fa-play play-icon icon'></i>".
"              <i class='fas fa-pause pause-icon icon'></i>".
"            </button>".
"            <div class='video-volume-control'>".
"              <button class='control-btn toggle-volume on'>".
"                <i class='fas fa-volume-up icon volume-on'></i>".
"                <i class='fas fa-volume-mute icon volume-off'></i>".
"              </button>".
"              <div class='volume-seekbar seekbar'>".
"                <span class='progress'></span>".
"              </div>".
"            </div>".
"            <div class='video-timings'>".
"              <div class='start-time time'>00:00:00</div>".
"              <div class='end-time time'>00:00:00</div>".
"            </div>".
"          </div>".
"        </div>".
"      </div>   ".
"</div>".
"        </div>".
"        <br>".
"        <br>".
"<form class='d-flex flex-row' method='POST' action='#'>".
"        <button   class='btn btn-lg boton3 btn-sm rounded-pill shadow align-self-center'><span></span>".
"                <span></span>".
"                <span></span>".
"                <span></span>  <i class='fas fa-user-edit'></i>Regresar</button>".
"        <br/>".
"        <button  type='submit' name='eliminar' class='btn btn-lg boton3 btn-sm rounded-pill shadow align-self-center'><span></span>".
"                <span></span>".
"                <span></span>".
"                <span></span>  <i class='fas fa-user-edit'></i>Eliminar</button>".
"                </form>".
"    </body>";

    require('footer.php');
