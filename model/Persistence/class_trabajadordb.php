<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class clientedb{

    private $clientes;
    public function __construct() {
        $clientes = array();
    }


    public function consultarTrabajadoreDB($trabajador){
        $con = new db();
        $query=$con->prepare("SELECT nombre,apellidos,edad,email,telefono,foto FROM trabajador WHERE IdUsuario= :trabajador");
        $query->bindValue(":trabajador", $trabajador);
        $resutado = $con->consultarObjectes($query);

//        private $id;
//        private $nombre;
//        private $apellidos;
//        private $edad;
//        private $email;
//        private $telefono;
//        private $foto;
//        private $idUsuario;
    

        if($resutado){
            $trabajador = $resutado[0];

            return  new trabajador($trabajador['nombre'], $trabajador['apellidos'], $trabajador['edad'], $trabajador['email'],$trabajador['telefono'],$trabajador['foto']);
      
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
        $resutado = $con->consultarObjectes($query);
        var_dump($resutado);
      
        return $resutado;

    }

/*
*/

}