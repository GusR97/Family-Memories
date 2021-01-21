<?php
require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');
$elid=$_GET['id'];   
$registro = new ModeloVideo();
$video=$registro->verVideo($elid);
$fecha=$video->getFecha();
$titulo=$video->getTitulo();
$categoria=$video->getCategoria();
$descripcion=$video->getDescripcion();
$nombrevideo=$video->getNombreVideo();
$ubicacion=$video->getUbicacion();
$usuario=$video->getUsuario();



echo 

"<body class='container d-flex flex-column justify-content-center align-items-center align-content-center mt-0 ' style='background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%); height: 100%; width: 100%; padding: 0%;margin: 0%; '>".
"<div class='container d-flex flex-column align-self-center'>".
"<h1 class='texto-video' style='text-align: center; color: white;'></h1>".
"<div class='d-flex flex-row rounded justify-content-start mr-auto p-2' style='background-color: white;  height: 60%;'>".
"<div class='align-self-start   rounded mr-auto p-2' style=' height:100%;'>".
"<div class='d-flex flex-column justify-content-between  flex-nowrap rounded p-2'  style='width: 250px; height:100%; text-align: center;'>".
"<div class='texto-video' name='titulo' >$titulo</div>  ".
"<div class='texto-video' name='autor'>$usuario</div>  ".
"<div class='texto-video' name='categoria'>$categoria</div>    ".
"<div class='texto-video' name='descripcion'>Descripcion del Video</div>      ".
"</div>".
"</div>".
"<div class='video-player'>".
"        <div  name='titulo class='video-topbar'>$nombrevideo".
"        </div>".
"        <video name='video' src='https://www.videvo.net/videvo_files/converted/2018_07/videos/180607_A_101.mp466981_jw.mp4'></video>".
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
"        </div>".
"        <div class='d-flex justify-content-center flex-wrap rounded mr-auto' style='background-color: white; width: 25%; height: fit-content;'>".
"                <h1 style='font-size:24px';>Comentarios del Video</h1>".
"                <div id='caja-comentar' class='form-group align-self-end rounded' >".
"                        <i  style='color: rgba(9,9,121,1); 'class='far fa-comment-alt'></i>".
"                        <label for='nombre' style='color: rgba(9,9,121,1); '>Agregar Comentario</label>".
"                    <form style='width: 75px;' class='rounded'>".
"                    <div   style='background: transparent; text-align: center;width:250px;'>".
"                        <div style='background-color: rgba(9,9,121,1); color: white;width:250px;' class='d-flex justify-content-center flex-row rounded'> <div class='align-self-start' ><img src='imagenes/foto.jpg' style='width:50px;height:50px;' class='rounded-circle align-self-center' alt='Foto de Perfil'></div><h5>Bruno Samayoa Monroy</h5>".
"                            </div> ".
"                         <div class='d-flex'>".
"                         <textarea placeholder='Agrega un comentario para el video' class='form-control shadow rounded' id='nombre' rows='4'></textarea>".
"                         </div>".
"                            <button type='submit'  class='btn btn-lg boton3 btn-sm rounded-pill shadow'><span></span>".
"                                    <span></span>".
"                                    <span></span>".
"                                    <span></span>  <i class='fas fa-user-edit'></i>Comentar</button>".
"                     </div>".
"                </form>".
"        <br>".
"        <br>".
"        <i  style='color: white; 'class='far fa-comment-alt'></i>".
"        <label for='nombre' style='color: white; '>Comentarios del Video</label>".
"        <div   style='background: transparent; text-align: center;width:250px;'>".
"           <div style='background-color: rgba(9,9,121,1); color: white;' class='d-flex justify-content-center flex-row rounded'> <div class='align-self-start' ><img src='imagenes/foto.jpg' style='width:50px;height:50px;' class='rounded-circle align-self-center' alt='Foto de Perfil'></div><h5>Bruno Samayoa Monroy</h5>".
"               </div> ".
"            <div class='d-flex'>".
"            <div class='form-control shadow' id='nombre' style='width: 250px; height: 75px;'></div>".
"        </div>".
"        </div>".
"        </div>".
"</div>".
"</div>".
"        <button   class='btn btn-lg boton3 btn-sm rounded-pill shadow align-self-center'><span></span>".
"                <span></span>".
"                <span></span>".
"                <span></span>  <i class='fas fa-user-edit'></i>Regresar</button>".
"    </body>";

    require('footer.php');
