<script src="/clickdelivery/Vistas/empresa/js/datos_empresa.js" type="text/javascript"></script>
    <div id="dialog_empresa" title="Cantidad">
        <div id="dropzone" class="dropzone">
            
        </div>
    </div>
<div id="datos_empresa"><h1>Mis datos empresa</h1></div>
<div id="foto_empresa_subir">
    <img src="/clickdelivery/uploads/<?php if(!empty($this->dato_rest[0]['logo'])){ echo $this->dato_rest[0]['logo'];} ?>">
</div>
<input type="button" id="subir_foto_empresa" name="subir_foto_empresa" value="Subir foto">
<div id="tabla_actualizar_empresa">
    <form id="form_actu_empresa">
    <table>
        <tr>
            <td>
                Nombre
            </td>
            <td>
                <input type="hidden" name="nombre_foto" id="nombre_foto">
                <input type="hidden" name="idrestaurante" id="idrestaurante" value="<?php if(!empty($this->dato_rest[0]['nombre'])){ echo $this->dato_rest[0]['idRestaurante'];} ?>">
                <input type="text" name="nombreempresa" id="nombreempresa" value="<?php if(!empty($this->dato_rest[0]['nombre'])){ echo $this->dato_rest[0]['nombre'];} ?>">
            </td>
        </tr>
        <tr>
            <td>
                Telefono
            </td>
            <td>
                <input type="text" name="telefono" id="telefono" value="<?php if(!empty($this->dato_rest[0]['nombre'])){ echo $this->dato_rest[0]['telefono'];} ?>">
            </td>
        </tr>
        <tr>
            <td>
                Direccion
            </td>
            <td>
                <input type="text" name="direccion" id="direccion" value="<?php if(!empty($this->dato_rest[0]['nombre'])){ echo $this->dato_rest[0]['direccion'];} ?>">
            </td>
        </tr>
        <tr id="border">
            <?php if(empty($this->dato_rest[0]['nombre'])){ ?>
            <td colspan="2"><center><input type="button" name="enviar_act_empresa" id="enviar_act_empresa" value="Guardar"></center></td>
            <?php }else{ ?>
            <td colspan="2"><center><input type="button" name="actualizar_act_empresa" id="actualizar_act_empresa" value="Actualizar"></center></td>
            <?php } ?>
        </tr>
    </table>
    </form>
</div>