

<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class trabajadordb{

    private $trabajadores;
    public function __construct() {
        $trabajadores = array();
    }

    public function getTrabajadoresDb(){

        $con = new db();

        $query=$con->prepare("SELECT Id,Nombre,Apellidos,FechaNacimiento,Email,Telefono,Foto,IdUsuario,IdRol FROM trabajador");
        $workers = array();

        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
            $id=$row["Id"];
            $nombre = $row["Nombre"];
            $apellidos = $row["Apellidos"];
            $fechaNacimiento = $row["FechaNacimiento"];    
            $email = $row["Email"];
            $telefono = $row["Telefono"];    
            $foto = $row["Foto"]; 
            $idUsuario = $row["IdUsuario"];   
            $idRol = $row["IdRol"];  
                
            $worker = new trabajador($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$idUsuario,$idRol);
            array_push($workers,$worker);
        }
        // var_dump($query);
        //var_dump($workers);
        return $workers;

    }


    public function consultarTrabajadorDB($trabajador=null){
        $con = new db();
        
        if($trabajador== null){

            $query=$con->prepare("SELECT Id,Nombre,Apellidos,FechaNacimiento,Email,Telefono,Foto,IdUsuario,IdRol FROM trabajador order by IdUsuario");
            $workers = array();

            $resultado=$con->consultarObjectes($query);

            foreach ($resultado as $row) {
                $id=$row["Id"];
                $nombre = $row["Nombre"];
                $apellidos = $row["Apellidos"];
                $fechaNacimiento = $row["FechaNacimiento"];    
                $email = $row["Email"];
                $telefono = $row["Telefono"];    
                $foto = $row["Foto"]; 
                $idUsuario = $row["IdUsuario"];   
                $idRol = $row["IdRol"];  
                    
                $worker = new trabajador($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$idUsuario,$idRol);
                array_push($workers,$worker);
            }
            // var_dump($query);
            //var_dump($workers);
            return $workers;
        }else{

            $query=$con->prepare("SELECT id,nombre,apellidos,fechaNacimiento,email,telefono,foto,idUsuario,idRol FROM trabajador WHERE IdUsuario= :trabajador");
            $query->bindValue(":trabajador", $trabajador);
            $resultado = $con->consultarObjectes($query);

            if($resultado){
                $trabajador = $resultado[0];
                
                return new trabajador($trabajador['id'],$trabajador['nombre'], $trabajador['apellidos'], $trabajador['fechaNacimiento'], $trabajador['email'],$trabajador['telefono'],$trabajador['foto'],$trabajador['idUsuario'],$trabajador['idRol']);
            }
        }
        return false;      
    }

    public function addWorker($nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$rol,$idUser){
       

                  $con = new db();     
      $query=$con->prepare("INSERT INTO trabajador (Nombre,Apellidos,FechaNacimiento,Email,Telefono,Foto,IdRol,IdUsuario) VALUES (:nombre,:apellidos,:fechaNacimiento,:email,:telefono,:foto,:rol,:idUser)");

      
        $query->bindValue(":idUser", $idUser);
        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":apellidos", $apellidos);
        $query->bindValue(":fechaNacimiento", $fechaNacimiento);
        $query->bindValue(":email", $email);
        $query->bindValue(":telefono", $telefono);
        $query->bindValue(":foto", $foto);
        $query->bindValue(":rol", $rol);
           $resultado = $con->consulta($query);
  
        
        $con = null;
    }
    
    public function consultarRol($rol){
        $con = new db();
       
        $query=$con->prepare("SELECT Descripcion from rol where id=".$rol);
        $resultado = $con->consultarObjectes($query);      
        return $resultado;
    }
}
?>