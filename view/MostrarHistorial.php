<?php
echo "Tu historial de Entrenamiento/Dietas es el siguiente: "."</br>";

foreach ($entreno as $entrenamiento):


?>


 <?php echo $entrenamiento->getDescripcion() ?>

<!---->
<!--           <span>Nombre del Entreno: <input id="name" name="name" class="form-control" type="text" value="--><?php //echo $entrenamiento->getDescripcion() ?><!--" readonly />-->
<!---->
<!--            <span>Fecha Inicio:</span> <br> <input id="lastname" name="lastname" class="form-control" type="text" value="--><?php //echo $entrenamiento->getFechaInicio() ?><!--" readonly />-->
<!---->
<!--            <span> Fecha Fin:</span><br>  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="--><?php //echo $entrenamiento->getFechaFin() ?><!--" readonly />-->






<?php endforeach; ?>
