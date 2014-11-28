<script src="/clickdelivery/Vistas/empresa/js/actualizar_plato.js" type="text/javascript"></script>
<div id="marco de foto">
    <div id="foto_plato">
    
    </div>
    <div id="boton_foto_plato"><center><input type="button" name="b_subir_foto_plato" id="b_subir_foto_plato" value="Subir foto"></center></div>
</div>
<div>
    <form id="form_edit_plato">
        <table>
            <tr>
                <td>Nombre plato</td>
                <td><input type="hidden" name="idplato" id="idplato" value="<?php echo $this->dato_plato['idplato'] ?>">
                    <input type="text" name="nom_plato" id="nom_plato" value="<?php echo $this->dato_plato['nom_plato'] ?>"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="text" name="precio_plato" id="precio_plato" value="<?php echo $this->dato_plato['precio_plato'] ?>"></td>
            </tr>
            <tr>
                <td>descripcion</td>
                <td><input type="text" name="descr_plato" id="descr_plato" value="<?php echo $this->dato_plato['descr_plato'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="button" name="actualizar_pla" id="actualizar_pla" value="Actualizar plato"></center></td>
            </tr>
        </table>
    </form>
</div>