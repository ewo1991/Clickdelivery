<style type="text/css">

.mis_datos{
background-image: url('Vistas/index/image/datos.png');

}
.mis_pedidos{
    background-image: url('Vistas/index/image/platos.jpg');
}
.mis_promocion_empresa{
    background-image: url('Vistas/index/image/deli.png');
}
.button{
background: #4682B4;
      border-radius: 10px;
      color: #d7d7d7;
     
  }
  </style>

<div id="cuerpo_empresa">
    <div id="foto_empresa" class="linea"><center>
            <img width="240" height="270" src="/clickdelivery/uploads/<?php echo $this->rest[0]['logo'] ?>">
        </center></div>
    <div id="tema"><h1>Mi cuenta</h1></div>
	<div id="mis_datos_empresa" class="mis_datos">
            <div id="img_mis_dat_empresa">
                
            </div>
            <center><div>
            <input type="button" id="b_mis_datos_empresa" name="boton_m_d_e" value="Mis datos" class="button">
                </div></center>
	</div>
    <div id="mis_plato_empresa" class="mis_pedidos">
            <div id="img_mis_pedi_empresa">
                
            </div>
            <center><div>
            <input type="button" id="b_mis_plato_empresa" name="boton_plato_empresa" value="Mis platos" class="button">
                </div></center>
    </div>
    <div id="mis_promocion_empresa" class="mis_promocion_empresa">
        <div id="img_mis_promocion_empresa">
            
        </div>
        <center><div>
            <input type="button" id="b_mis_delivery" name="b_mis_delivery" value="Delivery" class="button">
        </div></center>
    </div>
</div>