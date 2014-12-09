<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php @session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/dataTables.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/funcion.js"></script> 
    <link type="text/css" href="<?php echo BASE_URL;?>css/dataTables.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo BASE_URL;?>css/jquery-ui.min.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo BASE_URL;?>css/cabecera.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo BASE_URL;?>css/pie.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo BASE_URL?>lib/img/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/botones_index.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>js/dropzone/downloads/dropzone.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>js/dropzone/downloads/css/dropzone.css" />
    <title>MVC</title>
<script> var base_url = <?php echo BASE_URL ?> </script>
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
                    <td><input type="password" name="contrasena" id="contrasena"</td>
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
                    <div id="mensaje1" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" id="nombre"</td>
                    <div id="mensaje2" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellidos" id="apellidos"</td>
                    <div id="mensaje3" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="email"</td>
                    <div id="mensaje4" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                    <td>Contrasena</td>
                    <td><input type="password" name="pass" id="pass"</td>
                    <div id="mensaje5" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                    <td>Confirmar Contrasena</td>
                    <td><input type="password" name="confirmar" id="confirmar"</td>
                    <div id="mensaje6" class="mensaje">dato nesesario</div>
                </tr>
                <tr>
                    <td colspan="2"><div id="error_login"></div>                </td>
                </tr>
            </table>
        </form>
    </div>
<div id="cabecera" align="center">
        	<div id="mensaje"><h1>EL DELIVERY DE LOS MEJORES RESTAURANTES DE LA CIUDAD</h1></div>
                <div id="imagen" class="alinear"></div>
            <div id="cepardor"  class="alinear">
            <div id="botones" class="alinear">
                
                <a href="#" class="boton" id="inicio">Inicio</a>
                <a  href="#" class="boton" id="nosotros">Nosotros</a >
                <a href="#" class="boton" id="contactenos">Contactenos</a>
                <a href="#" class="boton" id="blog">Blog</a>
                
            </div>
            </div>
            <div id="botones1" class="alinear">
                
                <?php 
                if(!empty($_SESSION['idUsuario'])){
                echo 'USUARIO: '.$_SESSION['usuario'];
                echo ' | <a href="#" id="serar" style="color:#ffffff">Salir</a>';
                }else{?>
            	<a href="#" id="ref_login" >Ingresar</a>&nbsp;|
              <a href="#" id="resgistrate" >Registrate</a>
                <?php }?>
            </div>
        </div>
    <div id="botones_inicio">
