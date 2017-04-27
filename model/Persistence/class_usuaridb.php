<?php
require_once("controller/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");


class usuaridb {

    private $usuaris;

    public function __construct() {
        $usuaris = array();
    }

    public function consultarUsuarisdb($name, $pass) {
        $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user AND Password= :password;";
		$con = new db();

        $resultado=$con->prepare($query);
        $user = $name;
        $password = $pass;
        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":password", $password);
        $resultado->execute();

       $numero_registro=$resultado->rowCount(); //devuelve el número de registros que devuelve la consulta, 0 si no coincide el user y password y 1 si coincide
//        if($numero_registro!=0){
//            echo "USUARIO CORRECTO";
//        }else{
//
//            header("location:index.php?ctl=usuari&act=login");
//            echo "USUARIO NO ENCONTRADO";
//        }

//		$arrayDeUsuaris = $con->consultarUsuari($query);
		$con = null;

//        $usuaris=$arrayDeUsuaris;
		return $numero_registro;
                
    }
}
?>