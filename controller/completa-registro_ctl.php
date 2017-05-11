<?
require_once("controller/function_AutoLoad.php");

$trabajador= new trabajador();

require_once 'view/header.php';

var_dump($_REQUEST['idUser']);

if (isset($_REQUEST['Submit'])) {

    	var_dump($_REQUEST['idUser']);
		$worker= $trabajador->addWorker($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['fechaNacimiento'],$_REQUEST['email'],$_REQUEST['telefono'],$_REQUEST['foto'],$_REQUEST['rol'],$_REQUEST['idUser']);

		var_dump($worker);
		die();
		$mensaje = "Te has registrado correctamente, Puedes iniciar Session";
        require_once 'view/confirmacion.php';
		}else{

		}


	

?>