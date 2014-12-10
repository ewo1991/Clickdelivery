
<style type="text/css">
.nombre{

font-family: verdana;
text-shadow: 0.1em #333;

}
.logo{

border-width:3px; 
}
.b_dely{
	 
	  background: #4682B4;
	  border-radius: 10px;
	  color: #d7d7d7;
	  float: right;
	  
	   


}

</style>
<script src="/clickdelivery/Vistas/index/js/index.js" type="text/javascript"></script>
<div id="restau" width="100%">
<div>
    <center>
        <span>Busca por el nombre de Restaurante: </span>
        <input type="text" name="buscar_restaurante" id="buscar_restaurante">
        <input type="button" name="b_bus_rest" id="b_buscar_rest" value="Buscar">
    </center>
</div>
<?php foreach ($this->dato_restaurant as $key=>$value){ ?>
<div id="restaurantes">
    <div id="foto_restaurante"><img width="60" height="60" src="/clickdelivery/uploads/<?php echo $value['logo']  ?>"></div>
    <div id="nombre_restaurant"><span class="nombre"><?php echo $value['nombre'] ?></span></div>
    <div id="boton_delivery"><input type="button" name="b_delivey" id="b_delivey" class="b_dely" idrest="<?php echo $value['idRestaurante']?>" value="HAZ TU DELIVERY"></div>
</div>
<?php } ?>
</div>