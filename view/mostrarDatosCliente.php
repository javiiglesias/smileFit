<?php if($cliente){?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">
    <form >
        <fieldset>
            <div class="form-group">
              Nombre:  <input class="form-control" type="text" placeholder="<?php echo $cliente->getNombre() ?>" readonly>
                Apellidos:  <input class="form-control" type="text" placeholder="<?php echo $cliente->getApellidos() ?>" readonly>
                Edad:  <input class="form-control" type="text" placeholder="<?php echo $cliente->getEdad() ?>" readonly>
                Email:  <input class="form-control" type="text" placeholder="<?php echo $cliente->getEmail() ?>" readonly>
                Telefono:  <input class="form-control" type="text" placeholder="<?php echo $cliente->getTelefono() ?>" readonly>
                Foto:   <img src="/intranet/uploads/<?php echo $cliente->getFoto(); ?>" alt="" />



            </div>


        </fieldset>
    </form>
    </div>

<?}?>
