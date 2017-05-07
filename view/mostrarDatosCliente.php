
<div class="container pRelative " id="main">
<?if($cliente){?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pLR0noxs mB15">
            <img class="img-responsive" src="view/images/<?echo $cliente->getFoto();?>"/>
   
        </div>

       <div class="col-xs-12 col-md-8 col-sm-6 col-lg-8pB35 h226 mB15">
          <span><?php echo $cliente->getNombre	();?></span>
               <h1> <?echo $cliente->getApellidos();?></h1><br>
          
           <span class="lite fz13"><?echo $cliente->getEdad();?></span><br>
          <span><?php echo $cliente->getEmail();?></span>
                <span class="pT20 bold colorRed dInlineB fz13">Leer más</span>-->
            
      </div>
    </div>

<?}?>
</div>