<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 21/05/17
 * Time: 12:27
 */
class FichaMedicadb{


    private $fichaMedica;
    public function __construct() {
        $fichaMedica = array();
    }



    public function consultarFichaMedicaDB($IdCliente){
        $con = new db();
        $query=$con->prepare("SELECT id,imc,peso,altura,metabolismo FROM fichamedica WHERE IdCliente= :cliente");
        $query->bindValue(":cliente", $IdCliente);
        $resutado = $con->consultarObjectes($query);

        if($resutado){
            $cliente = $resutado[0];

            return  new FichaMedica($cliente['id'], $cliente['imc'], $cliente['peso'], $cliente['altura'], $cliente['metabolismo']);
        }

        return false;
    }

    public function setFichaMedicaDB($id,$IMC,$Peso,$Altura,$Metabolismo){
        $con = new db();
        $query=$con->prepare("UPDATE fichamedica set imc=:imc , peso=:peso , altura=:altura ,metabolismo=:metabolismo where id= :cliente");
        $query->bindValue(":cliente", $id);
        $query->bindValue(":imc", $IMC);
        $query->bindValue(":peso", $Peso);
        $query->bindValue(":altura", $Altura);
        $query->bindValue(":metabolismo", $Metabolismo);
        $resutado = $con->consulta($query);

        if($resutado){
            $cliente = $resutado[0];

            return  new FichaMedica($cliente['id'],$cliente['imc'], $cliente['peso'], $cliente['altura'], $cliente['metabolismo']);
        }
        return false;



    }



    public function añadirFichaMedicaDB($nombre,$apellidos,$edad,$email,$idUser){

        $con = new db();
        $query=$con->prepare("INSERT INTO fichamedica(imc, peso, Edad, altura, metabolismo, IdUsuario) VALUES (:nombre,:apellidos,:edad,:email,:idUser)");

        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":apellidos", $apellidos);
        $query->bindValue(":edad", $edad);
        $query->bindValue(":email", $email);
        $query->bindValue(":idUser", $idUser);
        $resutado = $con->consulta($query);

        if($resutado){
            $cliente = $resutado[0];

            return  new cliente($cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto'],$cliente['idUser']);
        }
        return false;
    }



}