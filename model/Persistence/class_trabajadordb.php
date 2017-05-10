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
        $query=$con->prepare("SELECT id,nombre,apellidos,fechaNacimiento,email,telefono,foto,idUsuario FROM trabajador WHERE IdUsuario= :trabajador");
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

            return  new trabajador($trabajador['id'],$trabajador['nombre'], $trabajador['apellidos'], $trabajador['fechaNacimiento'], $trabajador['email'],$trabajador['telefono'],$trabajador['foto'],$trabajador['idUsuario']);
        }
        return false;      
    }

    public function insertarUsuariosdb($name, $pass,$rol){
     
         
           $descr=$rol;
           $description=$descr;
           var_dump($description);
     
          
        $query = "INSERT INTO trabajador (UserName, Password, Descripcion) VALUES (:user, :password, :description)";
        $con = new db();
        $resultado = $con->prepare($query);
        $user = $name;
        $password = $pass;
        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":password", $password);
        $resultado->bindValue(":description", $description);
        $resultado->execute();
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

}