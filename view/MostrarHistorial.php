<?php
 foreach ($entrenamiento as $entreno): ?>




            <input id="name" name="name" class="form-control" type="text" value="<?php echo $entrenamiento->getIdTrabajador() ?>" readonly />

            <span>Apellidos:</span> <br> <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $entrenamiento->getApellidos() ?>" readonly />

            <span> Fecha nacimiento:</span><br>  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $trabajador->getFechaNacimiento() ?>" readonly />

            <span>Email:</span> <br> <input id="email" name="email" class="form-control" type="text" value="<?php echo $trabajador->getEmail() ?>" readonly />

            <span>Telefono:</span><br>  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $trabajador->getTelefono() ?>" readonly />





<?php endforeach; ?>
