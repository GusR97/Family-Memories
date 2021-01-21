<?php
class Video {
 
    public $fecha;
    public $titulo ;
    public $categoria;
    public $descripcion;
    public $nombrevideo;
    public $ubicacion;
    public $usuario;
 
    public function __construct($Cfecha,$Ctitulo,$Ccategoria,$Cdescripcion,$Cnombrevideo,$Cubicacion,$Cusuario) {


        $this->fecha = $Cfecha;
        $this->titulo = $Ctitulo;
        $this->categoria = $Ccategoria;
        $this->descripcion = $Cdescripcion;
        $this->nombrevideo=$Cnombrevideo;
        $this->ubicacion=$Cubicacion;
       $this->usuario=$Cusuario;

    }



    function getFecha(){
return $this->fecha;
}
function getTitulo(){
    return $this->titulo;
}
function getCategoria(){
    return $this->categoria;
}
function getDescripcion(){
    return $this->descripcion;
}
function getNombreVideo(){
    return $this->nombrevideo;
}

function getUbicacion(){
    return $this->ubicacion;
}
function getUsuario(){
    return $this->usuario;
}






}

?>