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
        $this->_vista->setCss(array('cuerpoIndex'));
        $this->_vista->setJs(array('index'));
        $cadena=  split('=', $_REQUEST['url']);
        $this->_vista->platos= $this->deliveRepo->plato_restaurant($cadena[1]);
        $this->_vista->renderizar('index');
    }


} 