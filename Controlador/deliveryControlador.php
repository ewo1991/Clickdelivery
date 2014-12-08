<?php
use clickdelivery\Repositorio\DeliveryRepositorio;
class deliveryControlador extends Controlador
{
    protected $deliveRepo;
    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $this->deliveRepo=new DeliveryRepositorio;
        $this->_vista->setCss(array('index','mapa'));
        $this->_vista->setJs(array('index'));
        $cadena=  split('=', $_REQUEST['url']);
        $this->_vista->platos= $this->deliveRepo->plato_restaurant($cadena[1]);
        $this->_vista->renderizar('index');
    }
    
    public function empesar_envio(){
        $this->deliveRepo=new DeliveryRepositorio;
        $this->deliveRepo->guardar_delivery($_REQUEST['idresta']);
        $this->deliveRepo->guardar_detalle_delivey($_REQUEST);
        $this->deliveRepo->eviar_correo($_REQUEST);
    }    

} 