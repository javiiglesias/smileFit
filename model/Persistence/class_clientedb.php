<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class clientedb{

    private $clientes;
    public function __construct() {
        $clientes = array();
    }


    public function consultarClienteDB($cliente){
        $con = new db();
        $query=$con->prepare("SELECT nombre,apellidos,edad,email,telefono,foto FROM cliente WHERE IdUsuario= :cliente");
        $query->bindValue(":cliente", $cliente);
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
            $cliente = $resutado[0];

            return  new cliente($cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto']);
        }

        return false;
    }


/*
*/

}