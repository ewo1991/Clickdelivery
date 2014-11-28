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

            <tfoot>
                <tr>
                    <th>id plato</th>
                    <th>Nombre Plato</th>
                    <th>Pecio</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($this->platos as $key=>$value){ ?>
                    <tr>
                        <td><?php echo $value['idPlato'] ?></td>
                        <td><?php echo $value['nombre'] ?></td>
                        <td><?php echo $value['precio'] ?></td>
                        <td><?php echo $value['descripcion'] ?></td>
                        <td><div class="actualizar ui-icon ui-icon-circle-check" idplato="<?php echo $value['idPlato'] ?>"></div></td>
                        <td><div class="eliminar ui-icon ui-icon-trash" idplato="<?php echo $value['idPlato'] ?>"></div></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div></center>
