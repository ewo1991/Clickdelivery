<style type="text/css">

.mis_datos{
background-image: url('Vistas/index/image/datos.png');

}
.mis_pedidos{
    background-image: url('Vistas/index/image/pedido.png');
}
.button{
background: #4682B4;
      border-radius: 10px;
      color: #d7d7d7;
     
  }
</style>

<div id="cuerpo_cliente">
    <div id="foto" class="linea"><center>
            <img width="240" height="270" src="/clickdelivery/uploads/<?php echo $_SESSION['nombre_empresa']  ?>">
            </center></div>
    <div id="tema"><h1>Mi cuenta</h1></div>
	<div id="mis_datos" class="mis_datos">
            <div id="img_mis_dat_cliente">
                
            </div>
            <center><div>
            <input type="button" id="b_mis_datos" class="button" name="boton_m_d" value="Mis datos">
                </div></center>
	</div>
    <div id="mis_pedidos" class="mis_pedidos">
            <div id="img_mis_pedi_cliente">
                
            </div>
            <center><div>
            <input type="button" id="b_mis_pedi" class="button" name="boton_m_p" value="Mis pedidos">
                </div></center>
	</div>
</div>