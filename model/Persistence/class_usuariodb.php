<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class usuariodb{
    private $usuaris;
    public function __construct() {
        $usuaris = array();
    }
    public function consultarUsuarioDB($user){
        $con = new db();
        $query=$con->prepare("SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user");
        $query->bindValue(":user", $user);
        $resutalt = $con->consultarObjectes($query);


        foreach ($resutalt as $row) {
//Cambiar por if($resultat)-> si hay datos entrará si no no debolverá nada, tal y como lo hacemos aqui recorremos con un foreach un tan solo un resultado, ya que el return para la interacción. por loq ue estamos usando un foreach para recorrer 1 vez, cosa que con un if lo tenemos igual.(solo hará una iteracion aunque encuentres 200000 usuarios ...valdría con un if y entrando en el valor del primer elemento del array)
            $id = $row["id"];
            $username = $row["username"];
            $password = $row["password"];
            $descripcion = $row["descripcion"];
            return $user = new usuario($id, $username, $password, $descripcion);
        }

        return false;
    }

//    public function consultarUsuariosdb() {
//        $con = new db();
//        switch (func_num_args()) {
//            case 2:
//                $name=func_get_arg(0);
//                $pass=func_get_arg(1);
//                $con = new db();
//                $query=$con->prepare("SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user AND Password= :password;");
//
//                $user = $name;
//                $password = $pass;
//                $query->bindValue(":user", $user);
//                $query->bindValue(":password", $password);
//                $resutalt = $con->consulta($query);
//
//                foreach ($resutalt as $row) {
//                    $id = $row["id"];
//                    $username = $row["UserName"];
//                    $password = $row["Password"];
//                    $descripcion = $row["Descripcion"];
//                    $user = new usuario($id, $username, $password, $descripcion);
//                }
//
//                return $user;
//
//                break;
//            case 1:
//                $name=func_get_arg(0);
//                $query="SELECT id, username, password, descripcion FROM usuario WHERE UserName= :user;";
//                $resultado=$con->prepare($query);
//                $user = $name;
//                $resultado->bindValue(":user", $user);
//                $resultado->execute();
//                break;
//        }
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
//        $con = null;
//        return $resultado;
//    }
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
    }
}
?>
