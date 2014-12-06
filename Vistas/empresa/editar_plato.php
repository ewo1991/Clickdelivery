<script src="/clickdelivery/Vistas/empresa/js/actualizar_plato.js" type="text/javascript"></script>
<div id="dialog_act_plato" title="foto plato">
        <div id="dropzone" class="dropzone">
            
        </div>
    </div>
<div id="marco de foto">
    <div id="foto_plato">
        <img width="200" height="200" src="/clickdelivery/uploads/<?php echo $this->dato_plato[0]['foto'] ?>">
    </div>
    <div id="boton_foto_plato"><center><input type="button" name="b_subir_foto_plato" id="b_subir_foto_plato" value="Subir foto"></center></div>
</div>
<div>
    <form id="form_edit_plato">
        <table>
            <tr>
                <td>Nombre plato</td><input type="hidden" id="foto_act_plato" name="foto_act_plato">
                <td><input type="hidden" name="idplato" id="idplato" value="<?php echo $this->dato_plato[0]['idPlato'] ?>">
                    <input type="text" name="nom_plato" id="nom_plato" value="<?php echo $this->dato_plato[0]['nombre'] ?>"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio_plato" id="precio_plato" value="<?php echo $this->dato_plato[0]['precio'] ?>"></td>
            </tr>
            <tr>
                <td>descripcion</td>
                <td><input type="text" name="descr_plato" id="descr_plato" value="<?php echo $this->dato_plato[0]['descripcion'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="button" name="actualizar_pla" id="actualizar_pla" value="Actualizar plato"></center></td>
            </tr>
        </table>
    </form>
</div>