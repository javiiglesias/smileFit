<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Añadir Ficha";
require_once 'view/header.php';
$cliente= new cliente();

$ficha = new FichaMedica();

if(isset($_SESSION["test2"])){
    $rol2= $_SESSION["test2"];
}

$clientes=$cliente->getCliente($rol2);

$test=$clientes->getId();

if (isset($_REQUEST['añadir'])){
//    $existeCliente = $cliente->getCliente($_REQUEST['idUser']);
//    if ($existeCliente == true) { ?>
<!--        <div class="alert alert-dismissible alert-danger text-center">-->
<!--            <button type="button" class="close" data-dismiss="alert">&times;</button>-->
<!--            <h3> --><?php //echo "Ya hay una ficha Creada"; ?><!--</h3>-->
<!---->
<!--            <p><a class="alert-link" href='?ctl=cliente&act=MostrarDatos'>Mostrar Datos</a></p>-->
<!--        </div>-->

    <?php
        $IMC = $_REQUEST['IMC'];
        $Peso=$_REQUEST['Peso'];
        $Altura=$_REQUEST['Altura'];
        $Metabolismo=$_REQUEST['Metabolismo'];
//        $idUser=$_REQUEST['idUser'];
        $ficha->añadirFichaMedica($IMC,$Peso,$Altura,$Metabolismo, $test);
        header('Location: index.php?ctl=cliente&act=MostrarFichaMedica');


}else{
    require_once 'view/AñadirFichaMedica.php';
}


require_once 'view/footer.php';
ob_end_flush();
?>