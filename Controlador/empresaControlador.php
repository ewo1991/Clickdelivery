<?php
use clickdelivery\Repositorio\EmpresaRepositorio;
class empresaControlador extends Controlador
{
    protected $empreRepo;
    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->_vista->setJs(array('index_empresa'));
        $this->_vista->setCss(array('index_empresa','datos_empresa','platos_empresa'));
        $this->_vista->renderizar('index');
    }
    public function datos_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->_vista->dato_rest=  $this->empreRepo->datos_restaurante();
        $this->_vista->rendePartial('datos_empresa');
    }
    
    public function guardar_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->gauardar_empresa($_REQUEST['nombreempresa'],$_REQUEST['telefono'],$_REQUEST['direccion']);
    }
    
    public function actualiza_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->actualizar_empresa($_REQUEST['nombreempresa'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['idrestaurante']);
    }
    
    public function plato_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->_vista->platos=$this->empreRepo->select_plato();
        $this->_vista->rendePartial('plato_empresa');        
    }

} 