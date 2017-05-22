
<div class="container">
   <?php if(count($gen) > 0){
                
        require_once 'view/partials/solicitudesAsignadas.php';
        
    }else{
 		$msg = "No tienes ninguna solicitud asignada"; ?>

  		<h3><?php echo $msg; ?></h3>
 
    <?php }?>
 
</div>
