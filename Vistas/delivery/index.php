<div id="dialog_plato" title="cantidad">
        <form id="frm_login">
            <div>cantidad: <input type="text" name="cantidad" id="cantidad"></div>
        </form>
    </div>
<div id="cuerpo_platos" class="cuerpo_plato">
    <?php foreach ($this->platos as $key=>$value){ ?>
        <div id="plato" class="class_plato">
            <div id="foto_plato"></div>
            <div id="nombre_plato"><?php echo $value['nombre'] ?><input type="hidden" id="nombre_pl<?php echo $value['idPlato'] ?>" value="<?php echo $value['nombre'] ?>"></div>
            <div id="descripcion"><?php echo $value['descripcion'] ?></div>
            <div id="precio"><?php echo $value['precio'] ?><input type="hidden" id="precio_pl<?php echo $value['idPlato'] ?>" value="<?php echo $value['precio'] ?>"></div>
            <div id="boton_plato"><input type="button" name="b_plato" class="b_plato" id="b_plato" idplato="<?php echo $value['idPlato'] ?>" value="Camprar"></div>
        </div>
    <?php } ?>
</div>

<div id="carrito_compra_plato" class="cuerpo_plato">
    <form id="form_carrito">
        <table id="tablita">
            
        </table>
    </form>
</div>