<?php
use clickdelivery\Repositorio\IndexRepositorio;
class indexControlador extends Controlador
{
    protected $indxRepo;
    public function __construct()
    {
        parent::__construct();
    }

    //metodo para llamar al controller index
    public function index()
    {
        $this->_vista->setJs(array('funcion'));
        $this->_vista->setCss(array('cabecera','cuerpoIndex','pie'));
        $this->_vista->titulo = 'Portada de index';
        $this->_vista->renderizar('index');
    }
    
    public function registro(){
        $this->indxRepo = new IndexRepositorio();
        $this->indxRepo->guardar($_REQUEST['user'],$_REQUEST['pass'],$_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['email'],$_REQUEST['tipocliente']);
    }

} 