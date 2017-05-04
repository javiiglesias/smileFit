<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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

    <title>Guia de continguts</title>
</head>
<body>
<div class="w100">
  <?php

     require_once 'menu.php';

  ?>
  <?php if ($titlePage != "Inicio" && $titlePage != "Iniciar Sesión" && $titlePage != "Registrarse") { ?>
    <header class="container-header">
      <div class="container">
        <h1><?php echo $titlePage ?></h1>
        <hr class="featurette-divider">
      </div>
    </header>
  <?php } ?>




 

<!--<nav class="navbar navbar-default">-->
<!--        <div class="container-fluid">-->
<!--          <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--              <span class="sr-only">Toggle navigation</span>-->
<!--              <span class="icon-bar"></span>-->
<!--              <span class="icon-bar"></span>-->
<!--              <span class="icon-bar"></span>-->
<!--            </button>-->
<!--           <div class="col-xs-2">-->
<!--                  <a class="" href="?ctl=inici"><img class="img-responsive" src="view/images/original.png"/></a>-->
<!--              </div>-->
<!--        -->
<!--          <div id="navbar" class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--            <li class=""><a href="elementsNavegacio.php">Sobre nosotros</a></li>-->
<!--              <li class="active"><a href="?ctl=inici">Home</a></li>-->
<!--              <li class="dropdown">-->
<!--                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trabajos anteriores <span class="caret"></span></a>-->
<!--                <ul class="dropdown-menu">-->
<!--                  <li><a href="?ctl=anteriores&act=dietetica">Dietetica</a></li>-->
<!--                  -->
<!--                  <li><a href="?ctl=anteriores&act=entrenamientos">Entrenamiento</a></li>-->
<!---->
<!--                </ul>-->
<!--              </li>-->
<!--              <li class=""><a href="?ctl=dietas">Dietas</a></li>-->
<!--              <li class=""><a href="?ctl=entrenamientos">Entrenamientos</a></li>-->
<!--              <li class=""><a href="?ctl=trabaja-con-nosotros">Trabaja con nosotros</a></li>-->
<!--              <li class=""><a href="?ctl=contacta">Contacta</a></li>-->
<!--              <li class=""><a href="?ctl=usuari&act=login">Login</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</nav>-->