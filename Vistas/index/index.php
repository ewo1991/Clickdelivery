<div>
    <center>
        <span>Busca por el nombre de Restaurante: </span>
        <input type="text" name="buscar_restaurante" id="buscar_restaurante">
        <input type="button" name="b_bus_rest" id="b_buscar_rest" value="Buscar">
    </center>
</div>
<?php foreach (restaurante as $key=>$value){ ?>
<div>
    <div id="foto_index">
    </div>
    <div id="nombre_polleria">               
    </div>
    <div>
        <input type="button" name="delivery" id="delivery" value="HAS TU DELIVERY">
    </div>
</div>
<php } ?>