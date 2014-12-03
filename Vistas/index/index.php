<div>
    <center>
        <span>Busca por el nombre de Restaurante: </span>
        <input type="text" name="buscar_restaurante" id="buscar_restaurante">
        <input type="button" name="b_bus_rest" id="b_buscar_rest" value="Buscar">
    </center>
</div>
<?php print_r($this->dato_restaurant); ?>
<?php foreach ($this->dato_restaurant as $key=>$value){ ?>
<div id="restaurantes">
    <div id="foto_restaurante"></div>
    <div id="nombre_restaurant"><span><?php echo $value['nombre'] ?></span></div>
    <div id="boton_delivery"><input type="button" name="b_delivey" id="b_delivey" class="b_dely" idrest="<?php echo $value['idRestaurante']?>" value="HAZ TU DELIVERY"></div>
</div>
<?php } ?>