<div id="dialog_plato" title="Cantidad">
        <form id="frm_login">
            <div>cantidad: <input type="text" name="cantidad" id="cantidad"></div>
        </form>
    </div>
<div id="dialog_mensaje" title="Mensaje">
    <div id="map-canvas"></div>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
        <span>Nº de casa :</span><input type="text" name="numero_casa" id="numerp_casa">
    </div>
<div>
<div id="cuerpo_platos" class="cuerpo_plato">
    <?php $cont=0; foreach ($this->platos as $key=>$value){ if($cont==0){ ?>
    <input type="hidden" name="idrestaurant" id="idrestaurant" value="<?php echo $value['idRestaurante']?>">
    <?php } $cont++; ?>
        <div id="plato" class="class_plato">
            <div id="foto_plato"><img width="60" height="60" src="/clickdelivery/uploads/<?php echo $value['foto'] ?>"></div>
            <div id="nombre_plato"><?php echo $value['nombre'] ?><input type="hidden" id="nombre_pl<?php echo $value['idPlato'] ?>" value="<?php echo $value['nombre'] ?>"></div>
            <div id="descripcion"><?php echo $value['descripcion'] ?></div>
            <div id="precio"><?php echo $value['precio'] ?><input type="hidden" id="precio_pl<?php echo $value['idPlato'] ?>" value="<?php echo $value['precio'] ?>"></div>
            <div id="boton_plato"><input type="button" name="b_plato" class="b_plato" id="b_plato" idplato="<?php echo $value['idPlato'] ?>" value="Comprar"></div>
        </div>
    <?php } ?>
</div>

<div id="carrito_compra_plato" class="cuerpo_plato">
    <form id="form_carrito">
        <input type="hidden" name="idresta" id="idresta">
        <table id="tablita" border="1">
            <tr>
                <td>Nombre plato</td>
                <td>Precio</td>
                <td>cantidad</td>
                <td>total</td>
            </tr>
            <tr id="antes">
                <td colspan="3">total</td>
                <td id="totat_final"></td>
            </tr>
            
        </table>
    </form>
    <input type="button" id="b_compra_delivery" value="Delivery" style="display: none">
</div>
</div>