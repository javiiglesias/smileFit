<script src="view/js/validaAñadirFichaMedica.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">


    <form id="form" action="?ctl=cliente&act=AñadirFichaMedica&param=<?php echo $_SESSION["test2"] ?>" method="post">
        <div class="form-group">
            IMC:  <input id="IMC" name="IMC" class="form-control" type="text" />
            <span id='IMC_error' class=errorMsg >Introduce un IMC válido, numeros<br/></span>
            Peso:  <input id="Peso" name="Peso" class="form-control" type="text"  />
            <span id='Peso_error' class=errorMsg >Introduce un peso válido<br/></span>
            Altura:  <input id="Altura" name="Altura" class="form-control" type="text"  />
            <span id='Altura_error' class=errorMsg >Introduce una altura valida<br/></span>
            Metabolismo:  <input id="Metabolismo" name="Metabolismo" class="form-control" type="text"  />
            <span id='Metabolismo_error' class=errorMsg>Introduce un Metabolismo válido<br/></span>
            <input id="idUser" name="idUser" type="hidden" value="<?php echo $_SESSION["test2"]?>"; />
            <input type="submit" id="Submit" class="btn btn-default" name="añadir" value="Dar Alta"/>

        </div>

    </form>

