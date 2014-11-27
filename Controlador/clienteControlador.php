<?php
use clickdelivery\Repositorio\ClienteRepositorio;
class clienteControlador extends Controlador
{
    protected $clietRepo;
    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $this->_vista->setJs(array('validandoBotones'));
        $this->_vista->setCss(array('vistacss','mid_datoscss'));
        $this->_vista->renderizar('index');
    }
    
    public function mis_datos(){
        $this->_vista->rendePartial('mis_datos');
    }
    
    public function actualizar_dato_cliente(){
        $this->clietRepo=new ClienteRepositorio();
        $this->clietRepo->actuli_cliente($_REQUEST['nombre'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['email'],$_REQUEST['contrasena']);
    }
} 
