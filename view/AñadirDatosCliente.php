<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">


    <form action="?ctl=cliente&act=AñadirDatos&param=<?php echo $_SESSION["test2"] ?>" method="post">
        <div class="form-group">
            Nombre:  <input id="name" name="name" class="form-control" type="text" />
            Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text"  />
            Edad:  <input id="age" name="age" class="form-control" type="text"  />
            Email:  <input id="email" name="email" class="form-control" type="text"  />
            Telefono:  <input id="telefono" name="telefono" class="form-control" type="text"  />
            Foto:   <img src="" id="foto" name="foto" alt="" /> </br>
                    <input id="idUser" name="idUser" type="hidden" value="<?php echo $_SESSION["test2"]?>"; />
            <input type="submit" id="Submit" class="btn btn-default" name="añadir" value="Dar Alta"/>

        </div>

    </form>

