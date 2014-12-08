<script src="/clickdelivery/Vistas/empresa/js/delivery.js" type="text/javascript"></script>
<div>
    <div id="tabla_delivery" class="aling"><center>
        <table id="t_mis_delivery" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id delivery</th>
                    <th>Accion delivery</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($this->dato_delive as $key=>$value){ ?>
                    <tr>
                        <td><?php echo $value['idDelivery'] ?></td>
                        <td><center><input type="button" name="detalle_delivery" class="detalle_delivery_class" id="detalle_delivery" value="Detalle" id_delivery="<?php echo $value['idDelivery'] ?>">
                <input type="button" name="entregado" id="entregado" value="entregado" id_act_delivery="<?php echo $value['idDelivery'] ?>"></center></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table></center>
    </div>
    <div id="detalle_delivery_div" class="aling">

    </div>
</div>