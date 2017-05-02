<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class noticiasdb {
    private $noticias;
    public function __construct() {
        $noticias = array();
    }
   /* public function consultarNoticiasdb() {
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
        }*/
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
      /*  $con = null;
        return $resultado;
    }*/
    /*public function insertarNoticiasdb($name, $pass){
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
    }*/
    public function mostrarNoticiasdb(){
        $noticias = array();
        $query = "SELECT * FROM  noticias order by desc";
        $con = new db();
        $resultado = $con->prepare($query);
        $query->execute();
        $resultado = $query->FetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $row) {
                $id=$row["id"];
                $titiulo = $row["titiulo"];
                $imagen = $row["imagen"];
                $descripcion = $row["descripcion"];    
                 $contenido = $row["contenido"];             
                $noticia = new noticias($id,$titiulo,$imagen,$descripcion,$contenido);
                array_push($noticias,$noticia);



        }

        $con = null;
        var_dump($noticias);
        return $noticias;
    }


}
?>