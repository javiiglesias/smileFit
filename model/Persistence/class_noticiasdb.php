<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class noticiasdb {
    private $noticias;
    public function __construct() {
        $noticias = array();
    }
  
    public function mostrarNoticiasdb(){
        $con = new db();
        $query = $con->prepare("SELECT * FROM noticias");

        $noticias = array();
        
        $resultado=$con->consultarObjectes($query);
      
        foreach ($resultado as $row) {
                $id=$row["Id"];
                $titulo = $row["Titulo"];
                $imagen = $row["Imagen"];
                $descripcion = $row["Descripcion"];    
                $contenido = $row["Contenido"];             
                $noticia = new noticia($id,$titulo,$imagen,$descripcion,$contenido);
                array_push($noticias,$noticia);



        }

        $con = null;
        
        return $noticias;
    }
     public function mostrarNoticiadb($nNoticia){
        $con = new db();
        $query = $con->prepare("SELECT * FROM noticias where id=".$nNoticia);

        $noticias = array();
        
        $resultado=$con->consultarObjectes($query);
      
        foreach ($resultado as $row) {
                $id=$row["Id"];
                $titulo = $row["Titulo"];
                $imagen = $row["Imagen"];
                $descripcion = $row["Descripcion"];    
                $contenido = $row["Contenido"];             
                $noticia = new noticia($id,$titulo,$imagen,$descripcion,$contenido);
                array_push($noticias,$noticia);



        }
  
        $con = null;
        
        return $noticias;
    }


}
?>