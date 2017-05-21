
<div class="container">
    <?php if(isset($gen)){
        require_once 'view/partials/solicitudesAsignadas.php';
       
    }else{
  echo $msg;
    }?>
</div>
