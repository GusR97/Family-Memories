<?php
class ModeloVideo {


     public $dbHost     = "localhost";
     public $dbUsuario = "root";
     public $dbContrasena = "";
     public $dbNombre     = "videos";

     public function __construct(){
        if(!isset($this->db)){
            $conn = new mysqli($this->dbHost, $this->dbUsuario, $this->dbContrasena, $this->dbNombre);
            if($conn->connect_error){
                die("Fallo al conectar con la base de datos " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }



    }


public function agregarVideo($video) {
    echo '<script language="javascript">';
    echo 'alert("Se metio aca")';
    echo '</script>';

    $fechavideo=$video->getFecha();
    $titulovideo=$video->getTitulo();
    $categoriavideo=$video->getCategoria();
    $descripcionvideo=$video->getDescripcion();
    $nombrevideo=$video->getNombreVideo();
    $ubicacion=$video->getUbicacion();
    $usuario=$video->getUsuario();


    echo '<script language="javascript">';
    echo 'alert("Se metio aca 2")';
    echo '</script>';
//$ubicacion="http://127.0.0.1/album/videos/$usuario/$nombrevideo";
    $query = "INSERT INTO videos(fecha,titulo,categoria,descripcion,nombre,ubicacion,usuario) VALUES('$fechavideo','$titulovideo','$categoriavideo','$descripcionvideo','$nombrevideo','$ubicacion','$usuario');";

    $link = mysqli_connect("localhost", "root", "", "videos");

    if (mysqli_query($link, $query)) {
        echo '<script language="javascript">';
        echo 'alert("Se metio aca 3")';
        echo '</script>';
        return TRUE;
     } else {
        echo "Error: " . mysqli_error($link);
        return FALSE;
     }




    }


    function modificarVideo($id,$video) {
  
    $titulovideo=$video->getTitulo();
    $categoriavideo=$video->getCategoria();
    $descripcionvideo=$video->getDescripcion();
    $nombrevideo=$video->getNombreVideo();
    $ubicacionvideo=$video->getUbicacion();

    $link = mysqli_connect("localhost", "root", "", "videos");
    $query = "UPDATE videos SET titulo='$titulovideo',categoria='$categoriavideo',descripcion='$descripcionvideo',nombre='$nombrevideo',ubicacion='$ubicacionvideo' WHERE id_video='$id';";

    mysqli_autocommit($link, TRUE);

    if (mysqli_query($link, $query)) {
 
        return TRUE;
     } else {
        echo "Error: " . mysqli_error($link);
        return FALSE;
     }

    }


    function eliminarVideo($id) {
        $query = "DELETE FROM videos WHERE id_video='$id'";
   
    
        if (mysqli_query($this->db,  $query)) {
            return TRUE;
         } else {
            echo "Error: " . mysqli_error($link);
            return FALSE;
         }
    
    
    

    }


    function verVideo($id) {
        $query = "SELECT * FROM Videos WHERE id_video='$id'";
   
        $video=NULL;
        $fetchvideos=mysqli_query($this->db,  $query);
while($row=$fetchvideos->fetch_assoc()){
$fecha = $row['fecha'];                     
$titulo=$row['titulo'];  
$categoria=$row['categoria'];
$descripcion=$row['descripcion'];  
$nombrevideo=$row['nombre']; 
$ubicacion=$row['ubicacion']; 
$usuario=$row['usuario'];  


$video = new Video($fecha,$titulo,$categoria,$descripcion,$nombrevideo,$ubicacion,$usuario);



}
return $video;
        

    }
/*

    function obtenerVideos(String id) {
        $query = SELECT * FROM Videos WHERE id_video='$id';
   
    
        $fetchvideos=mysqli_query($this->db,  $query)

        $arregloVideos = array();
while($row =mysql_fetch_assoc($fetchvideos){

$fecha = $row['fecha'];                     
$titulo=$row['titulo'];  
$categoria=$row['categoria'];
$descripcion=$row['descripcion'];  
$nombrevideo=$row['video']; 
$ubicacion=$row['video']; 
$usuario=$row['usuario'];  


$video = new Video($fecha,$titulo,$categoria,$descripcion,$nombrevideo,$ubicacion,$usuario);
array_push( $arregloVideos,$video );

}
return $arregloVideos;
        

    }
*/
}

?>

