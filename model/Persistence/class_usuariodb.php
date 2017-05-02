<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class usuariodb {
    private $usuaris;
    public function __construct() {
        $usuaris = array();
    }
    public function consultarUsuariosdb() {
        $con = new db();
        switch (func_num_args()) {
            case 2:
                $name=func_get_arg(0);
                $pass=func_get_arg(1);
                $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user AND Password= :password;";
                $resultado=$con->prepare($query);
                $user = $name;
                $password = $pass;
                $resultado->bindValue(":user", $user);
                $resultado->bindValue(":password", $password);
                $resultado->execute();
                break;
            case 1:
                $name=func_get_arg(0);
                $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user;";
                $resultado=$con->prepare($query);
                $user = $name;
                $resultado->bindValue(":user", $user);
                $resultado->execute();
                break;
        }
//        if($pass ==null){
//            $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user;";
//        }else{
//            $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user AND Password= :password;";
//        }
//        $resultado=$con->prepare($query);
//        $user = $name;
//        //$password = $pass;
//        $resultado->bindValue(":user", $user);
//        $resultado->bindValue(":password", $password);
//        $resultado->execute();
        $con = null;
        return $resultado;
    }
    public function insertarUsuariosdb($name, $pass){
        $description = "cliente";
        $query = "INSERT INTO usuario (UserName, Password, Descripcion) VALUES (:user, :password, :description)";
        $con = new db();
        $resultado = $con->prepare($query);
        $user = $name;
        $password = $pass;
        $resultado->bindValue(":user", $user);
        $resultado->bindValue(":password", $password);
        $resultado->bindValue(":description", $description);
        $resultado->execute();
        $con = null;
        return $resultado;
    }
}
?>