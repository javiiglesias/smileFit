<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 30/04/2017
 * Time: 13:33
 * Modified by Alba Casas
 * date : 6/05/2017
 * modifications: 	Consult name of admid and adding this in title of view his
 */

ob_start();

/*We include autoload for the purpose of collecting information from a user*/
	/*require_once("controller/function_AutoLoad.php");
	$newUser = new usuario();*/

/*As the session contains the name of the administrator can this and put it to a variable, in order to access this in the other views*/
$user=  $_SESSION["usuario"] ;
$titlePage = "Dashboard de ".$user;

require_once 'view/header.php';

$workers = new trabajador();


$workers->getAllTrabajadores();
$idRol=$workers->getIdRol();
$nombreRol=$workers->getTrabajadorNombreRol($idRol);



require_once 'view/menuAdministrador.php';
require_once 'view/footer.php';

ob_end_flush();
?>

