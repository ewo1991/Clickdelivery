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
    
    public function editar_plato(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->actualizar_plato($_REQUEST['idplato'],$_REQUEST['nom_plato'],$_REQUEST['precio_plato'],$_REQUEST['descr_plato']);
        $this->plato_empresa();
    }
    
    public function pagina_editar_plato(){
        $this->_vista->dato_plato=$_REQUEST;
        $this->_vista->rendePartial('editar_plato');
    }
    
    public function eliiminar_plato(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->eliminar($_REQUEST['idplato']);
        $this->plato_empresa();
    }
    
    public function pagina_nuevo_plato(){
        $this->_vista->rendePartial('nuevo_plato_empresa');
    }
    
    public function guardar_nuevo_plato(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->guardar_nuevo_plato($_REQUEST['nombre_plato'],$_REQUEST['precio_plato'],$_REQUEST['descripcion_plato']);
        $this->plato_empresa();
    }

} 