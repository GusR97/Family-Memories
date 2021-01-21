<?php
require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');

$cargaelid=$_GET['id'];   
$cargaregistro = new ModeloVideo();
$cargavideo=$cargaregistro->verVideo($cargaelid);
$cargafecha=$cargavideo->getFecha();
$cargatitulo=$cargavideo->getTitulo();
$cargacategoria=$cargavideo->getCategoria();
$cargadescripcion=$cargavideo->getDescripcion();
$carganombrevideo=$cargavideo->getNombreVideo();
$cargaubicacion=$cargavideo->getUbicacion();
$cargarusuario=$cargavideo->getUsuario();

$variable=FALSE;
if(isset($_POST['subir_video'])){













  $modificoVideo=FALSE;
     $maxsize = 5242880; 
     if(isset($_FILES['video']['name']) && $_FILES['video']['name'] != ''){
         $nombrevideo = $_FILES['video']['name'];
         $target_dir = "album/videos/";
         $target_file =$_SERVER['DOCUMENT_ROOT']."/".$target_dir . $_FILES["video"]["name"];
         $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $extensions_arr = array("mp4","avi","3gp","mov","mpeg","mvk");
  
  
         if( in_array($extension,$extensions_arr) ){
            if(($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
               $_SESSION['message'] = "Tamanio del archivo uncorrecto. Debe ser menos de 5MB .";
            }else{
              if(move_uploaded_file($_FILES["video"]["tmp_name"],$target_file)){
  $modificoVideo=TRUE;
               }
  
             }
  }
  
  
  }
  
  
  if($modificoVideo==FALSE){
    
   $nombrevideo=$carganombrevideo;
   $ubicacion=$cargaubicacion;
  
  }else{     $nombrevideo=$name;
    $ubicacion="videos/$name";} 

              $titulo=$_POST["titulo"];
              $categoria=$_POST["categoria"];
              $descripcion=$_POST["descripcion"];
              $usuario="SOLOVINO";
              
              echo '<script language="javascript">';
              echo 'alert("Lllega aca COMODIN 2")';
              echo '</script>';
  
  
    $registro = new ModeloVideo();
    $video = new Video($cargafecha,$titulo,$categoria,$descripcion,$nombrevideo,$ubicacion,$usuario);

    $variable=$registro->modificarVideo($cargaelid,$video);
    
  }



  if($variable==TRUE){
  
    
    echo '<div class="modal" tabindex="-1" role="dialog">'.
    '<div class="modal-dialog" role="document">'.
    '  <div class="modal-content">'.
    '    <div class="modal-header">'.
    '      <h5 class="modal-title">Video subido exitosamente</h5>'.
    '      <button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
    '        <span aria-hidden="true">&times;</span>'.
    '      </button>'.
    '    </div>'.
    '    <div class="modal-body">'.
    '      <p>Modal body text goes here.</p>'.
    '    </div>'.
    '    <div class="modal-footer">'.
    '      <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>'.
    '    </div>'.
    '  </div>'.
    '</div>'.
  '</div>';
    
  
  }
  
  else{
    
    echo '<div class="modal" tabindex="-1" role="dialog">'.
    '<div class="modal-dialog" role="document">'.
    '  <div class="modal-content">'.
    '    <div class="modal-header">'.
    '      <h5 class="modal-title">Error al subir video</h5>'.
    '      <button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
    '        <span aria-hidden="true">&times;</span>'.
    '      </button>'.
    '    </div>'.
    '    <div class="modal-body">'.
    '      <p>Modal body text goes here.</p>'.
    '    </div>'.
    '    <div class="modal-footer">'.
    '      <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>'.
    '    </div>'.
    '  </div>'.
    '</div>'.
  '</div>';
  
  
  
  }
  
  
  














 echo "<body class='container' style='height: auto;background: rgb(2,0,36);".
"    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);'>".
"        <div class='container d-flex justify-content-center align-items-center rounded' style='background: linear-gradient(90deg, rgba(255,255,255,.9) 0%, rgba(255,255,255,.9) 45%, rgba(255,255,255,.9) 100%); height: fit-content; width: 490px;'>".
"                <form enctype='multipart/form-data'  action='#'  method='POST'>\n" .
"                        <br>".
"                        <h1 style='text-align: center;'>Modificar Mi Video <i class='fas fa-file-video icono-color'></i>".
"                        </h1>".
"                        <br>".
"                        <div class='form-group'>".
"                                <i class='fas fa-bullhorn  icono-color'></i>".
"                                <label for='nombre'>Titulo</label>".
"                                <input name='titulo' value=".$cargatitulo." placeholder='Modifica el titulo del video'".
"                                        class='form-control rounded-pill shadow  '".
"                                        style='border: 1.5px solid rgba(9,9,121,1);' id='nombre' type='text'/>".
"                        </div>".
"                        <div class='form-group'>".
"                                <i class='fas fa-bullhorn  icono-color'></i>".
"                                <label for='credenciales'>Categoria</label>".
"                                <select name='categoria' id='comboCat' class='form-control rounded-pill shadow '".
"                                        style='border: 1.5px solid rgba(9,9,121,1);'>".
"                                        <option>Modifica la Categoria</option>".
"                                        <option>Vacaciones 1</option>".
"                                        <option>Vacaciones 2</option>".
"                                        <option>Vacaciones 3</option>".
"                                        <option>Vacaciones 4</option>".
"                                </select>".
"                        </div>".
"                        <div class='form-group '>".
"                                <i class='fas fa-video  icono-color'></i>".
"                                <div class='custom-file rounded-pill shadow ' style='text-align:center;'>".
"                                        <label for='nombre' class='custom-file-upload'>Archivo</label>".
"                                        <input  name='video' type='file' class='custom-file-input rounded-pill shadow ' style='text-align:center;  border: 1.5px solid rgba(9,9,121,1); 'id='nombre'>".
"                                        <label class='custom-file-label rounded-pill shadow'".
"                                                style=' border: 1.5px solid rgba(9,9,121,1);' for='nombre'>Modifica el".
"                                                Archivo</label>".
"                                </div>".
"                        </div>".
"    <div id='reproductor' class='video-player' style='width: 450px; height: 350px;'>\n" .
"      <div class='video-topbar'>\n" .
"        Titulo del Video\n" .
"      </div>\n" .
"      <video src='https://www.videvo.net/videvo_files/converted/2018_07/videos/180607_A_101.mp466981_jw.mp4' id='reproductor_video'>\n" .
"          </video>\n" .
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
"        </div>\n" .
"        </div>\n" .
"                        <div class='form-group '>".
"                                <i class='far fa-comment-alt  icono-color'></i>".
"                                <label for='nombre'>Descripcion</label>".
"                                <textarea name='descripcion' placeholder='Modifica la descripcion del video '".
"                                        class='form-control rounded-pill shadow' id='nombre'".
"                                        style=' border: 1.5px solid rgba(9,9,121,1);' rows='4'>".$cargadescripcion."</textarea>".
"                        </div>".
"                        <br>".
"                        <div class='d-flex justify-content-around' style='text-align: center;'>".
"                                <button ".
"                                        class='btn btn-lg boton3 btn-sm rounded-pill shadow '><span></span>".
"                                        <span></span>".
"                                        <span></span>".
"                                        <span></span> <i class='fas fa-window-close'></i> Cancelar</button>".
"                                <button name='subir_video' type='submit' class='btn btn-lg boton3 btn-sm rounded-pill shadow'><span></span>".
"                                        <span></span>".
"                                        <span></span>".
"                                        <span></span> <i class='fas fa-user-edit'></i>Modificar</button>".
"                        </div>".
"                        <br>".
"                        <br>".
"                </form>".
"                        </div>".
"</body>";

echo "<script>".
"var valorcat = '$cargacategoria';".
"document.querySelector('#comboCat').value =valorcat;".
"</script>;";

require('footer.php');
?>