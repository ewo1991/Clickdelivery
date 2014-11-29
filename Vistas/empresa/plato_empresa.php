<script src="/clickdelivery/Vistas/empresa/js/plato_empresa.js" type="text/javascript"></script>
<center>
    <div id="mis_plat">
        <h1>Mis platos</h1>
    </div>
    <div id="platos_empresa">
    <table id="plato_em" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id plato</th>
                    <th>Nombre Plato</th>
                    <th>Pecio</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($this->platos as $key=>$value){ ?>
                    <tr>
                        <td><?php echo $value['idPlato'] ?></td>
                        <td><?php echo $value['nombre'] ?> <input type="hidden" name="nombre_plato" id="nombre_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['nombre'] ?>"></td>
                        <td><?php echo $value['precio'] ?> <input type="hidden" name="precio_plato" id="precio_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['precio'] ?>"></td>
                        <td><?php echo $value['descripcion'] ?> <input type="hidden" name="discripcion_plato" id="descripcion_plato<?php echo $value['idPlato'] ?>" value="<?php echo $value['descripcion'] ?>"></td>
                        <td><div class="actualizar ui-icon ui-icon-circle-check" idplato="<?php echo $value['idPlato'] ?>"></div></td>
                        <td><div class="eliminar ui-icon ui-icon-trash" idplato="<?php echo $value['idPlato'] ?>"></div></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
                <div id="boton_nuevo"><center>           
                        <input type="button" name="b_atras" id="b_atras" value="Atras">
                    <input type="button" name="b_nuevo_plato" id="b_nuevo_plato" value="Nuevo plato">
                </center></div>
    </div></center>
