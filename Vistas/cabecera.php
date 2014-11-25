<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-1.11.1.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-ui.min.js"></script> 
    <link type="text/css" href="<?php echo BASE_URL;?>css/jquery-ui.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo BASE_URL?>lib/img/favicon.ico" type="image/x-icon" />
    <title>MVC</title>

    <!-- cargamos los css -->
    <?php if(isset($_params['css']) && count($_params['css'])): ?>
        <?php for($i=0; $i < count($_params['css']); $i++): ?>

            <link href="<?php echo $_params['css'][$i] ?>" type="text/css" rel="stylesheet" media="screen" />

        <?php endfor; ?>
    <?php endif; ?>

    <!-- cargamos los js -->
    <?php if(isset($_params['js']) && count($_params['js'])): ?>
        <?php for($i=0; $i < count($_params['js']); $i++): ?>

            <script src="<?php echo $_params['js'][$i] ?>" type="text/javascript"></script>

        <?php endfor; ?>
    <?php endif; ?>
            <script>
    $(function() {
        $("#ref_login").click(function(){
            $("#dialog").dialog("open");
        });
        $("#dialog").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                    str=$("#frm_login").serialize();
                    $.post('index/login',str, function(data) {
                    console.log(data);
                   });
                        $(this).dialog("close");
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
            ],
        });

        $("#registrar").click(function(){
            $("#dialog2").dialog("open");
        });
        $("#dialog2").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        con1=$('#pass').val();
                        alert(con1);
                        con2=$('#confirmar').val();
                        alert(con2);
                        if(con1==con2){
                    str=$("#frm_registro").serialize();
                    $.post('index/registro',str, function(data) {
                    console.log(data);
                   });
                        $(this).dialog("close");
                        alert('datos guardados correctamente XD');
                    }else{
                        alert('verifique sus datos');
                    }
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
            ],
        });
            
    });

    
    </script>
</head>
<body>
    <div id="dialog" title="Identificarse">
    <form id="frm_login">
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario" id="usuario"></td>
            </tr>
            <tr>
                <td>Contrasena</td>
                <td><input type="text" name="contrasena" id="contrasena"</td>
            </tr>
            <tr>
                <td colspan="2"><div id="error_login"></div>                </td>
            </tr>
        </table>
    </form>
</div>
<div id="dialog2" title="Registrarse">
    <form id="frm_registro">
        <table>
            <tr>
                <td>Como</td>
                <td>
                    <select name="tipocliente">
                    <option value="1">Cliente</option>
                    <option value="2">Empresa</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="user" id="user"</td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre"</td>
            </tr>
            <tr>
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="apellidos" id="apellidos"</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"</td>
            </tr>
            <tr>
                <td>Contrasena</td>
                <td><input type="password" name="pass" id="pass"</td>
            </tr>
            <tr>
                <td>Confirmar Contrasena</td>
                <td><input type="password" name="confirmar" id="confirmar"</td>
            </tr>
            <tr>
                <td colspan="2"><div id="error_login"></div>                </td>
            </tr>
        </table>
    </form>
</div>
<div id="cabecera" align="center">
        	<div id="mensaje"><h1>El delivery de los mejores restaurantes de la ciudad</h1></div>
          	<div id="imagen" class="alinear" ></div>
            <div id="cepardor"  class="alinear">
            <div id="botones" class="alinear">
                
                <a href="#" class="boton">Inicio</a>
                <a  href="#" class="boton">Nosotros</a >
                <a href="#" class="boton">Contactenos</a>
                <a href="#" class="boton">Blog</a>
                
            </div>
            </div>
            <div id="botones1" class="alinear">
            	<a href="#" id="ref_login" class="inicio">Ingresar</a>&nbsp;|
              <a href="#" id="registrar" class="inicio">Registrate</a>
            </div>
        </div>
