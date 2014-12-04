<div id="dialog_plato" title="Identificarse">
        <form id="frm_login">
            <div id="nombre_plato"></div>
            <div>cantidad: <input type="text" name="cantidad" id="cantidad"></div>
        </form>
    </div>
<div id="cuerpo_platos" class="cuerpo_plato">
    <?php foreach ($this->platos as $key=>$value){ ?>
        <div id="plato" class="class_plato">
            <div id="foto_plato"></div>
            <div id="nombre_plato"><?php echo $value['nombre'] ?></div>
            <div id="descripcion"><?php echo $value['descripcion'] ?></div>
            <div id="precio"><?php echo $value['precio'] ?></div>
            <div id="boton_plato"><input type="button" name="b_plato" class="b_plato" id="b_plato" idplato="<?php echo $value['idPlato'] ?>" value="Camprar"></div>
        </div>
    <?php } ?>
</div>

<div id="carrito_compra_plato" class="cuerpo_plato">sfsdfasd
    <form id="form_carrito">
        <table id="tablita">
            
        </table>
    </form>
</div>