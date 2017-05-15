<?require_once("controller/entrenamientos_ctl.php");?>
    <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
        <img src="view/images/Logo.png" class="img-responsive img-Logologin">
    </div>
    <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
        <div class="container-login">
            <form action="?ctl=cliente&act=solicitar" method="post">
                <span> <? if(isset($error)){echo $error;}?></span>
                <div class="form-group space-top">
                    <label>Tipo de solicitud:</label><br/>
                    <select name="rol">
                        <option value="1">Entrenamiento</option>
                        <option value="2">Dieta</option>                                           
                    </select>
                </div>
                <!-- <div class="form-group space-top">
                    <label>Título de la solicitud:</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Título para tu solicitud">
                </div> -->
                <div class="form-group space-top">
                    <label>Descripción de la solicitud:</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Escribe aquí tu solicitud">
                </div>                 
<!--                 <div class="form-group">
                    <label>Fecha:</label>
                    <input minlength="4" type="date" name="fecha" class="form-control" placeholder="<?php $fecha ?>" value="<?php echo $fecha ?>" />
                </div> -->                
                <div class="col-md-offset-3 col-xs-offset-2">
                    <button name="solicitar" class="btn btn-info mT20">  Solicitar    <image class="btn-icon" src="view/images/registre.png"/></button>
                </div>
            </form>
        </div>
    </div>