<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Añadir Ficha";
require_once 'view/header.php';
$cliente= new cliente();

if (isset($_REQUEST['añadir'])){
    $existeCliente = $cliente->getCliente($_REQUEST['idUser']);
    if ($existeCliente == true) { ?>
                    <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo "Ya hay una ficha Creada"; ?></h3>

<p><a class="alert-link" href='?ctl=cliente&act=MostrarDatos'>Mostrar Datos</a></p>
</div>

  <?php  }else{
        $nombre = $_REQUEST['name'];
        $apellidos=$_REQUEST['lastname'];
        $edad=$_REQUEST['age'];
        $email=$_REQUEST['email'];
        $telefono=$_REQUEST['telefono'];
        $foto="";
        $idUser=$_REQUEST['idUser'];
        $cliente->añadirCliente($nombre,$apellidos,$edad,$email,$telefono,$foto, $idUser);
        header('Location: index.php?ctl=cliente&act=MostrarDatos');
    }

}else{
    require_once 'view/AñadirDatosCliente.php';
}


require_once 'view/footer.php';
ob_end_flush();
?>