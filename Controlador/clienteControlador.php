<?php
use clickdelivery\Repositorio\ClienteRepositorio;
class clienteControlador extends Controlador
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
        $this->_vista->setCss(array('cuerpoIndex'));
        $this->_vista->renderizar('index');
    }

} 
