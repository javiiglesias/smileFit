<?php
//db details
<<<<<<< HEAD
$dbHost = 'mysql.hostinger.es';
$dbUsername = 'u973682173_smile';
$dbPassword = 'bAPugGKiZ571tWI';
$dbName = 'u973682173_smile';
=======
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'smilefit';
>>>>>>> Marcos

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>