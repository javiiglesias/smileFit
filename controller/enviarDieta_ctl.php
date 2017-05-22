<?php

require_once 'view/header.php';
require_once("controller/function_AutoLoad.php");
//require_once 'view/sendbymail.php';
if(isset($_REQUEST['param'])){
 $cliente= new cliente();
    $emailClient=$cliente->emailSegunId($_REQUEST['param']);
    $emailCliente=implode($emailClient[0]);
if(isset($_POST['enviar'])) {
 

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
  
$email_to = $emailCliente;
$email_subject = "Dieta";

   

 
$email_message = "Detalles De la dieta asignada:\n\n";

 for ($index1 = 0; $index1 < $_POST['diferenciaDias']; $index1++) { 
   $indice= $index1+1;
    $email_message .= "Dia: " . $indice . "\n";   
        for ($index = 0; $index < $_POST['tipoComidaCantidad']; $index++) { 
            
            $email_message .= "Tipo Comida: " . $_POST['tipoComida'.$index] . "   |----| ";
            $email_message .= "Producto: " . $_POST['producto']. " \n ";
        }
       $email_message .= "\n";
 }
     $email_message .= "Cualquier duda  que tenga respecto a  las tomas indicadas pongase en contacto con su Dietista\n";
     $email_message .= "Email enviado por smileFit si usted no ha solicitado nuestros servicios no haga caso a este mensaje";
    
 /*$email_message .= "<html>
<head>
  <title>Su Dieta</title>
</head>
<body>
  ";for ($index1 = 0; $index1 < $_POST['diferenciaDias']; $index1++) {
   $indice=$index1+1;
    $email_message .= "Dia: " . $indice . "\n";   
        for ($index = 0; $index < $_POST['tipoComidaCantidad']; $index++) { 
    $email_message .=  "<strong>Tipo Comida:</strong> <span class='w100px''>" . $_POST['tipoComida'.$index] . "</span>  ";
     $email_message .=   "<strong>Producto:</strong>  <span class='w100px''>"  . $_POST['producto']. "</span> \n ";
        }
       $email_message .= "\n";
 }

  $email_message .= " <table>
    <tr>
      <th>Empresa</th><th>Tarifa Anterior</th><th>Nueva Tarifa</th><th>Comision</th>
    </tr>
    <tr>
      <td>Repsol</td><td>3.3</td><td>3.5</td><td>10%</td>
    </tr>
    <tr>
      <td>Telefonica</td><td>17.45</td><td>18.1</td><td>11%</td>
    </tr>
  </table>
</body>
</html>
";*/


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito! al correo: ";
    echo $emailCliente;
}else{
    
echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
}else{
    echo "ha fallado";
}




require_once 'view/footer.php';
ob_end_flush();
?>