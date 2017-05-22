<<<<<<< HEAD
<?php
include  ('controller/checkSession.php');

if(checkSession()) {


    if ($ficha) {
        ?>
        <!--    <script src="view/js/validaModificaCliente.js" type="text/javascript"></script>-->
        <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen"/>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">

            <form id="form" name="form" method="post"
                  action="?ctl=cliente&act=ModificarDatosFicha&param=<?php echo $ficha->getId(); ?>">
                <div class="form-group">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $ficha->getId(); ?>"/>
                    IMC: <input id="IMC" name="IMC" class="form-control" type="text"
                                value="<?php echo $ficha->getIMC() ?>" readonly/>
                    <span id='IMC_error' class=errorMsg>Introduce un IMC, solo letras<br/></span>
                    Peso: <input id="Peso" name="Peso" class="form-control" type="text"
                                 value="<?php echo $ficha->getPeso() ?>" readonly/>
                    <span id='Peso_error' class=errorMsg>Introduce un apellido valido, solo letras<br/></span>
                    Altura: <input id="Altura" name="Altura" class="form-control" type="text"
                                   value="<?php echo $ficha->getAltura() ?>" readonly/>
                    <span id='Altura_error'
                          class=errorMsg>Introduce una edad correcta (numeros de 1-2 digitos)<br/></span>
                    Metabolismo: <input id="Metabolismo" name="Metabolismo" class="form-control" type="text"
                                        value="<?php echo $ficha->getMetabolismo() ?>" readonly/>
                    <span id='Metabolismo_error' class=errorMsg>Introduce un email valido<br/></span> </br>

                    <!--                <input id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/> </br>-->
                    <!--                <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios"  style="visibility : hidden" />-->

                </div>

            </form>


        </div>


    <?php }
}else {
    header("Location: ?ctl=inicio");
}
?>
=======
<?php
include  ('controller/checkSession.php');

if(checkSession()) {


    if ($ficha) {
        ?>
        <!--    <script src="view/js/validaModificaCliente.js" type="text/javascript"></script>-->
        <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen"/>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">

            <form id="form" name="form" method="post"
                  action="?ctl=cliente&act=ModificarDatosFicha&param=<?php echo $ficha->getId(); ?>">
                <div class="form-group">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $ficha->getId(); ?>"/>
                    IMC: <input id="IMC" name="IMC" class="form-control" type="text"
                                value="<?php echo $ficha->getIMC() ?>" readonly/>
                    <span id='IMC_error' class=errorMsg>Introduce un IMC, solo letras<br/></span>
                    Peso: <input id="Peso" name="Peso" class="form-control" type="text"
                                 value="<?php echo $ficha->getPeso() ?>" readonly/>
                    <span id='Peso_error' class=errorMsg>Introduce un apellido valido, solo letras<br/></span>
                    Altura: <input id="Altura" name="Altura" class="form-control" type="text"
                                   value="<?php echo $ficha->getAltura() ?>" readonly/>
                    <span id='Altura_error'
                          class=errorMsg>Introduce una edad correcta (numeros de 1-2 digitos)<br/></span>
                    Metabolismo: <input id="Metabolismo" name="Metabolismo" class="form-control" type="text"
                                        value="<?php echo $ficha->getMetabolismo() ?>" readonly/>
                    <span id='Metabolismo_error' class=errorMsg>Introduce un email valido<br/></span> </br>

                    <!--                <input id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/> </br>-->
                    <!--                <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios"  style="visibility : hidden" />-->

                </div>

            </form>


        </div>


    <?php }
}else {
    header("Location: ?ctl=inicio");
}
?>
>>>>>>> Marcos
