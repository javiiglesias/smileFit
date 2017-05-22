<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "marc.jimenez.delgado@hotmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nom']) ||
!isset($_POST['telefon']) ||
!isset($_POST['email']) ||
!isset($_POST['poblacio']) ||
!isset($_POST['observacions'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nom'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefon'] . "\n";
$email_message .= "Población: " . $_POST['email'] . "\n";
$email_message .= "E-mail: " . $_POST['poblacio'] . "\n";
$email_message .= "Observaciones: " . $_POST['observacions'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>