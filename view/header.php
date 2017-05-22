<!DOCTYPE html>
<html>
<head>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<meta charset="UTF-8">
<script type="text/javascript" src="view/js/jquery.min.js"></script>
   <script src="view/js/test.js"></script>

<script defer src="view/js/jquery.flexslider-min.js"></script>
<script defer src="view/js/jquery.flexslider-min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Josefin+Sans|Muli" rel="stylesheet">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">




<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="view/css/flexslider.css" rel="stylesheet" type="text/css">
<link href="view/css/estils.css" rel="stylesheet" type="text/css">
<link href="view/css/prueba.css" rel="stylesheet" type="text/css">

    <!-- Include the stylesheet -->
    <link type="text/css" rel="stylesheet" href="view/calendar/style.css"/>
    <!-- Include the jQuery library -->
    <script src="view/calendar/jquery.min.js"></script>

    <title>Smile Fit S.L</title>
</head>
<body>
<div class="w100">
  <?php

     require_once 'menu.php';

  ?>
  <?php if ($titlePage != "Inicio" && $titlePage != "Iniciar Sesión" && $titlePage != "Registrarse") { ?>
    <header class="container-header">
      <div class="container">
        <h1 class="bgGreenTitle text-center"><?php echo $titlePage ?></h1>
<!--        <hr class="featurette-divider">-->
      </div>
    </header>
  <?php } ?>
