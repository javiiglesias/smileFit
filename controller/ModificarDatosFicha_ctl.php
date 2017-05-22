<?php
require_once("controller/function_AutoLoad.php");

$ficha= new FichaMedica();


if (isset($_REQUEST['modificar'])){
    $id= $_REQUEST['id'];
    $IMC = $_REQUEST['IMC'];
    $Peso=$_REQUEST['Peso'];
    $Altura=$_REQUEST['Altura'];
    $Metabolismo=$_REQUEST['Metabolismo'];
    $ficha->setFichaMedica($id,$IMC,$Peso,$Altura,$Metabolismo);
    header('Location: index.php?ctl=cliente&act=MostrarFichaMedica');
}

?>