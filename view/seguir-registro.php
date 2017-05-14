
<?php require_once('partials/header-altaEvento.php');?>

<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form action="?ctl=admin&act=completa-registro" method="post">
                    <h1 class="text-center">Registrarse</h1>
                    <small class="col-md-offset-1">Por favor,rellenar todos los campos. </small>

                    <span> <? if(isset($error)){echo $error;}?></span>
                    <div class="form-group space-top">
                        <label>Numero de Usuario:</label>
                        <input type="text" name="idUser" value="<?php echo $idUser?>" readonly class="form-control">
                    </div>
                    <div class="form-group space-top">
                        <label>Nombre de Usuario:</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control">
                    </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text"  maxlength="10" name="telefono" class="form-control">
                    </div>
                    <div class="form-group"  id='fechaNacimiento'>
                        <label>fecha de nacimiento</label>
                       
                        <input type='text' name="fechaNacimiento" class="form-control"  />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
               
                    </div>
                      <div class="form-group">
                        <label>foto</label>
                        <input type="text"  name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipo Trabajador:</label>
                        <input type="text" name="rol" value="<?php echo $rol?>" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="text" name="pass" value="<?php echo $password?>" readonly class="form-control">
                    </div>
                  
                   
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button name="Submit" class="btn btn-info">  Completar Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script type="text/javascript">
        $(function () {
            $('#fechaNacimiento').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            </script>
            
            
            
            
            
            
            
            