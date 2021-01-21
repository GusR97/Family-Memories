<?php

require('cabecera.php');
require_once('operacionesVideo.php');
require_once('crud_videos.php');



if(isset($_FILES['video']['name']) && $_FILES['video']['name'] != ''){
   echo $_FILES["video"]["error"];
echo $_FILES["video"]["name"];


}
$variable=FALSE;
if(isset($_POST['subir_video'])){


   $maxsize = 5242880; 
   if(isset($_FILES['video']['name']) && $_FILES['video']['name'] != ''){
       $name = $_FILES['video']['name'];
       $target_dir = "album/videos/";
       $target_file =$_SERVER['DOCUMENT_ROOT']."/".$target_dir . $_FILES["video"]["name"];
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              $extensions_arr = array("mp4","avi","3gp","mov","mpeg","mvk");
          
       if( in_array($extension,$extensions_arr) ){


          if(($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
             $_SESSION['message'] = "Tamanio del archivo uncorrecto. Debe ser menos de 5MB .";


          }else{

        

        
             if(move_uploaded_file($_FILES["video"]["tmp_name"],$target_file)){
        
          



        
              $fecha = date("d/m/y");                     
              $titulo=$_POST["titulo"];
              $categoria=$_POST["categoria"];
              $descripcion=$_POST["descripcion"];
              $nombrevideo=$name;
              $ubicacion="videos/$name";
              $usuario="Brunito";
              
              
              $registro = new ModeloVideo();
              $video = new Video($fecha,$titulo,$categoria,$descripcion,$nombrevideo,$ubicacion,$usuario);
              $variable=$registro->agregarVideo($video);


          



           
               $_SESSION['message'] = "Mensaje subido exitosamente.";
             }
          }
       }else{
          $_SESSION['message'] = "Extension invalida.";
       }
   }else{
       $_SESSION['message'] = "Porfavor selecciona un archivo";
   }


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





echo "<div class=' d-flex' style='text-alignment:center;background: rgb(2,0,36);\n" .
  "  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 45%, rgba(9,9,121,1) 100%);'>\n" .
  "<div class='container d-flex justify-content-center align-items-center rounded'\n" .
  "  style='background: linear-gradient(90deg, rgba(255,255,255,.9) 0%, rgba(255,255,255,.9) 45%, rgba(255,255,255,.9) 100%);   height: auto; width: 490px;'>\n" .
  "  <form enctype='multipart/form-data' name='subir_video' action='#'  method='POST'>\n" .
  "    <h1 style='text-align: center;'>Agregar Nuevo Video <i class='fas fa-file-video icono-color'></i></h1>\n" .
  "    <div class='form-group'>\n" .
  "      <i class='fas fa-bullhorn  icono-color'></i>\n" .
  "      <label for='nombre'>Titulo</label>\n" .
  "      <input id='titulo' name='titulo' placeholder='Inserta el titulo del video' class='form-control rounded-pill shadow  '\n" .
  "        style='border: 1.5px solid rgba(9,9,121,1);' id='nombre' type='text'>\n" .
  "    </div>\n" .
  "    <div class='form-group'>\n" .
  "      <i class='fas fa-bullhorn  icono-color'></i>\n" .
  "      <label for='selectCategoria'>Categoria</label>\n" .
  "      <select id='selectCategoria' name='categoria' class='form-control rounded-pill shadow '\n" .
  "        style='border: 1.5px solid rgba(9,9,121,1);'>\n" .
  "        <option>Selecciona una Categoria</option>\n" .
  "        <option>Vacaciones 1</option>\n" .
  "        <option>Vacaciones 2</option>\n" .
  "        <option>Vacaciones 3</option>\n" .
  "        <option>Vacaciones 4</option>\n" .
  "      </select>\n" .
  "    </div>\n" .
  "    <div class='form-group align-items-center'>\n" .
  "      <i class='fas fa-video  icono-color'></i>\n" .
  "      <div class='custom-file rounded-pill shadow ' style='text-align:center;'>\n" .
  "        <label for='nombre' class='custom-file-upload'>Archivo</label>\n" .
  "        <input  type='file' id='input_archivo' name='video' class='custom-file-input rounded-pill shadow '\n" .
  "          style='text-align:center;  border: 1.5px solid rgba(9,9,121,1);'/>\n" .
  "        <label class='custom-file-label rounded-pill shadow' style=' border: 1.5px solid rgba(9,9,121,1);'\n" .
  "          for='nombre'>Selecciona el Archivo</label>\n" .
  "      </div>\n" .
  "      </div>\n" .

  "    <div class='form-group rounded'>\n" .
  "      <i class='far fa-comment-alt  icono-color'></i>\n" .
  "      <label for='nombre'>Descripcion</label>\n" .
  "      <textarea name='descripcion' placeholder='Inserta la descripcion del video ' class='form-control rounded-pill shadow'\n" .
  "        id='descripcion' style=' border: 1.5px solid rgba(9,9,121,1);' rows='4'></textarea>\n" .
  "    </div>\n" .


  "    <div id='reproductor' class='d-flex video-player align-self-center' style=' width: 450px; height: 350px; style='text-align:center; '>\n" .
  "      <div class='video-topbar'>\n" .
  "        Titulo del Video\n" .
  "      </div>\n" .
  "      <video id='reproductor_video' class='align-self-center'\n" .
  "        src='https://www.videvo.net/videvo_files/converted/2018_07/videos/180607_A_101.mp466981_jw.mp4'></video>\n" .
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


    "    <br>\n" .
    "    <br>\n" .
    "    <br>\n" .




  
  "    <div class='d-flex justify-content-around ' style='text-align: center;'>\n" .
  "      <button type='submit' id='botoncancelar' class='btn btn-lg boton3 btn-sm rounded-pill shadow '><span></span>\n" .
  "        <span></span>\n" .
  "        <span></span>\n" .
  "        <span></span> <i class='fas fa-window-close'></i> Cancelar</button>\n" .
  "      <button type='submit' name='subir_video'  id='botonaceptar' class='btn btn-lg boton3 btn-sm rounded-pill shadow'><span></span>\n" .
  "        <span></span>\n" .
  "        <span></span>\n" .
  "        <span></span> <i class='fas fa-user-edit'></i>Publicar</button>\n" .
  "    </div>\n" .
  "    <br>\n" .
  "  </form>\n" .
  "    </div>\n" .

  " </body>";
  require('footer.php');
?>