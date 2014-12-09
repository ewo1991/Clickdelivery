<script src="/clickdelivery/Vistas/empresa/js/detalle_delivery.js" type="text/javascript"></script>
<table id="t_detalle_delivery" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id Plato</th>
                    <th>Nombre Plato</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($this->dato_plato_join as $key=>$value){ ?>
                    <tr>
                        <td><?php echo $value['idPlato'] ?></td>
                        <td><?php echo $value['nombre'] ?></td>
                        <td><?php echo $value['precio'] ?></td>
                        <td><?php echo $value['cantidad'] ?></td>
                        <td><?php echo $cantidad=$value['precio']*$value['cantidad']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<input type="button" name="ver_direccion" id="ver_direccion" value='Direccion' direccion='<?php echo $this->dato_plato_join[0]['direccion'] ?>'>