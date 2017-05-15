<?php

ob_start();

$titlePage = "Entrenamientos";

require_once 'view/header.php';

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

require_once 'view/entrenamientos.php';

require_once 'view/footer.php';

ob_end_flush();
?>