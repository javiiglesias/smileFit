

<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class trabajadordb{

    private $trabajadores;
    public function __construct() {
        $trabajadores = array();
    }



    public function consultarTrabajadorDB($trabajador){
        $con = new db();
        $query=$con->prepare("SELECT nombre,apellidos,fechaNacimiento,email,telefono,foto FROM trabajador WHERE IdUsuario= :trabajador");
        $query->bindValue(":trabajador", $trabajador);
        $resultado = $con->consultarObjectes($query);

//        private $id;
//        private $nombre;
//        private $apellidos;
//        private $edad;
//        private $email;
//        private $telefono;
//        private $foto;
//        private $idUsuario;
    

        if($resultado){
            $trabajador = $resultado[0];

            return  new trabajador($trabajador['nombre'], $trabajador['apellidos'], $trabajador['fechaNacimiento'], $trabajador['email'],$trabajador['telefono'],$trabajador['foto']);
        }
        return false;      
    }

    public function addWorker($nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$rol){
                  $con = new db();     
      $query=$con->prepare("INSERT INTO trabajador (Nombre,Apellidos,FechaNacimiento,Email,Telefono,Foto,IdRol) VALUES (:nombre,:apellidos,:fechaNacimiento,:email,:telefono,:foto,:rol)");

      
       
        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":apellidos", $apellidos);
        $query->bindValue(":fechaNacimiento", $fechaNacimiento);
        $query->bindValue(":email", $email);
        $query->bindValue(":telefono", $telefono);
        $query->bindValue(":foto", $foto);
        $query->bindValue(":rol", $rol);
           $resultado = $con->consulta($query);
        var_dump($resultado);
        echo "hollaaaaaa";
        
        $con = null;
    }
    
    public function consultarRol($rol){
        $con = new db();
       
        $query=$con->prepare("SELECT Descripcion from rol where id=".$rol);
        $resultado = $con->consultarObjectes($query);
        var_dump($resultado);
      
        return $resultado;

    }
/*
*/
