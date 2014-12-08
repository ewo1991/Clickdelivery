<script src="/clickdelivery/Vistas/cliente/js/mis_pedidos.js" type="text/javascript"></script>
<center><div id="tabla_pedidos">
        <span><h1>Mis pedidos</h1></span>
<table id="pedidos_cliente" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id delivery</th>
                    <th>Nombre restaurante</th>
                    <th>Nombre plato</th>
                    <th>Pecio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Estado</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($this->datos_pedidos as $key=>$value){ ?>
                    <tr>
                        <td><?php echo $value['idDelivery'] ?></td>
                        <td><?php echo $value['nombre'] ?> <input type="hidden" name="nombre_plato" id="nombre_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['nombre'] ?>"></td>
                        <td><?php echo $value['plato'] ?> <input type="hidden" name="precio_plato" id="precio_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['precio'] ?>"></td>
                        <td><?php echo $value['precio'] ?> <input type="hidden" name="discripcion_plato" id="descripcion_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['descripcion'] ?>"></td>
                        <td><?php echo $value['cantidad'] ?></td>
                        <td><?php echo $toral=$value['precio']*$value['cantidad'] ?></td>
                        <td><?php echo $value['estadodelivery'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</div></center>