<?php session_start() ?>
<script src="/clickdelivery/Vistas/cliente/js/mis_datos_cliente.js" type="text/javascript"></script>
<div id="dialog_cliente" title="Cantidad">
        <div id="dropzone" class="dropzone">
            
        </div>
    </div>
<div id="datos_cliente"><h1>Mis datos</h1></div>
<div id="foto_cliente_subir"><center>
    <img width="240" height="270" src="/clickdelivery/uploads/<?php echo $_SESSION['nombre_empresa']  ?>">
    </center></div>
<input type="button" id="subir_foto_cliente" name="subir_foto_cliente" value="Subir foto">
<div id="tabla_actualizar">
    <form id="form_actu_cliente">
    <table>
        <tr>
            <td>
                Nombre
            </td>
            <td>
                <input type="hidden" name="foto_cliente" id="foto_cliente">
                <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Telefono
            </td>
            <td>
                <input type="text" name="telefono" id="telefono" value="<?php echo $_SESSION['telefono'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Direccion
            </td>
            <td>
                <input type="text" name="direccion" id="direccion" value="<?php echo $_SESSION['direccion'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Contraseña
            </td>
            <td>
                <input type="password" name="contrasena" id="contrasena" value="<?php echo $_SESSION['pass'] ?>">
            </td>
        </tr>
        <tr id="border">
            <td colspan="2"><center><input type="button" name="enviar_act_cliente" id="enviar_act_cliente" value="Enviar"></center></td>
        </tr>
    </table>
    </form>
</div>