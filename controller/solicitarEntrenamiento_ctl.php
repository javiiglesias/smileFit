<?php

ob_start();

$titlePage = "Solicitar Entrenamiento";

require_once 'view/header.php';

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}



require_once 'view/solicitarEntrenamiento.php';

require_once 'view/footer.php';

ob_end_flush();
?>