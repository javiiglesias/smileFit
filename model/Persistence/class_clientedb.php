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
        $query=$con->prepare("SELECT id,nombre,apellidos,edad,email,telefono,foto FROM cliente WHERE IdUsuario= :cliente");
        $query->bindValue(":cliente", $cliente);
        $resutado = $con->consultarObjectes($query);


        if($resutado){
            $cliente = $resutado[0];

            return  new cliente($cliente['id'], $cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto']);
        }

        return false;
    }

    public function setClienteDB($id,$nombre,$apellidos,$edad,$email,$telefono,$foto){
        $con = new db();
        $query=$con->prepare("UPDATE cliente set nombre=:nombre , apellidos=:apellidos , edad=:edad ,email=:email, telefono=:telefono , foto=:foto where id= :cliente");
        $query->bindValue(":cliente", $id);
        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":apellidos", $apellidos);
        $query->bindValue(":edad", $edad);
        $query->bindValue(":email", $email);
        $query->bindValue(":telefono", $telefono);
        $query->bindValue(":foto", $foto);
        $resutado = $con->consulta($query);

        if($resutado){
            $cliente = $resutado[0];

            return  new cliente($cliente['id'], $cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto']);
        }
        return false;

    }

    public function eliminarClienteDB($id){
        $con = new db();
        $query=$con->prepare("DELETE FROM cliente WHERE id=:cliente");
        $query->bindValue(":cliente", $id);
        $resutado = $con->consulta($query);

        if($resutado){
           return true;
        }
        return false;

    }

    public function añadirClienteDB($nombre,$apellidos,$edad,$email,$telefono,$foto, $idUser){

        $con = new db();
        $query=$con->prepare("INSERT INTO cliente(Nombre, Apellidos, Edad, Email, Telefono, Foto, IdUsuario) VALUES (:nombre,:apellidos,:edad,:email,:telefono,:foto,:idUser)");

        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":apellidos", $apellidos);
        $query->bindValue(":edad", $edad);
        $query->bindValue(":email", $email);
        $query->bindValue(":telefono", $telefono);
        $query->bindValue(":foto", $foto);
        $query->bindValue(":idUser", $idUser);
        $resutado = $con->consulta($query);

        if($resutado){
            $cliente = $resutado[0];

            return  new cliente($cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto'],$cliente['idUser']);
        }
        return false;
    }

    public function consultarClienteDB($cliente=null){
        $con = new db();
        
        if($cliente== null){

            $query=$con->prepare("SELECT Id,Nombre,Apellidos,Edad,Email,Telefono,Foto,IdUsuario,IdRol FROM cliente order by Id");
            $clientes = array();

            $resultado=$con->consultarObjectes($query);

            foreach ($resultado as $row) {
                $id=$row["Id"];
                $nombre = $row["Nombre"];
                $apellidos = $row["Apellidos"];
                $edad = $row["Edad"];    
                $email = $row["Email"];
                $telefono = $row["Telefono"];    
                $foto = $row["Foto"]; 
                $idUsuario = $row["IdUsuario"];   
                $idRol = $row["IdRol"];  
                    
                $cliente = new cliente($id,$nombre,$apellidos,$edad,$email,$telefono,$foto,$idUsuario,$idRol);
                array_push($clientes,$cliente);
            }

            return $clientes;
        }else{
            
            $query=$con->prepare("SELECT Id,Nombre,Apellidos,Edad,Email,Telefono,Foto,IdUsuario,IdRol FROM cliente WHERE Id= :cliente");
            $query->bindValue(":cliente", $cliente);
            $resultado = $con->consultarObjectes($query);
            
            if($resultado){
                $cliente = $resultado[0];
                
                return new cliente($cliente['Id'],$cliente['Nombre'], $cliente['Apellidos'], $cliente['Edad'], $cliente['Email'],$cliente['Telefono'],$cliente['Foto'],$cliente['IdUsuario'],$cliente['IdRol']);
            }
        }
       return false;      
    }
}