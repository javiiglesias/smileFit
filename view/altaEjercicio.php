
<div class="container">
<<<<<<< HEAD
      <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
=======
>>>>>>> Marcos
    <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
        <img src="view/images/Logo.png" class="img-responsive img-Logologin">
    </div>
    <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
        <div class="container-login">
            <form id="form" action="?ctl=trabajador&act=altaEjercicio" method="post">
                
                <span> <?php if(isset($error)){echo $error;} ?></span>
                <label>Tipo de Ejercicio:</label>
                <select name="tipoEjercicio">
                    <option value="1">Bicicleta</option>
                    <option value="2">Correr</option>
                    <option value="3">Pesas</option>
                    <option value="4">Elíptica</option>
                    <option value="5">Abdominales</option>
                    <option value="6">Flexiones</option>
                </select>
                <input type="hidden" name="idEntrenamiento" value="<?php echo $idEntrenamiento; ?>">
                <div class="form-group space-top">
                    <label>Descripción del Ejercicio:</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del Ejercicio">
                    <!-- <span id='descripcion_Ejercicio_error' class="errorMsg" >Introduce una descrpción válida (letras y numeros)</span> -->
                </div>
                <div class="form-group space-top">
                    <label>Series:</label>
                    <input type="number" id="series" name="series" class="form-control" placeholder="Número de series">
                    <!-- <span id='series_error' class="errorMsg" >Introduce un número de series mayor de 0</span> -->
                </div> 
                <div class="form-group space-top">
                    <label>Duración/Repeticiones:</label>
                    <input type="number" id="duracion" name="duracion" class="form-control" placeholder="Duración o número de repeticiones">
                    <!-- <span id='duracion_error' class="errorMsg" >Introduce una duración mayor de 0</span> -->
                </div>
                <div class="form-group space-top">
                    <label>Descanso:</label>
                    <input type="text" id="descanso" name="descanso" class="form-control" placeholder="Tiempo entremedio de descanso">
                    <!-- <span id='descanso_error' class="errorMsg" >Introduce un descanso mayor de 0</span> -->
                </div>                    
                <div class="col-md-offset-3 col-xs-offset-2">
                    <button name="Submit" type="submit" class="btn btn-info">  Añadir    <image class="btn-icon" src="view/images/registre.png"/></button>
                </div>
            </form>
        </div>
    </div>
</div>