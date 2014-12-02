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
        $this->indxRepo = new IndexRepositorio();
        $this->_vista->setCss(array('cuerpoIndex'));
        $this->_vista->dato_restaurant = $this->indxRepo->dato_restaurant();
        $this->_vista->renderizar('index');
    }
    
    public function registro(){
        $this->indxRepo = new IndexRepositorio();
        $this->indxRepo->guardar($_REQUEST['user'],$_REQUEST['pass'],$_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['email'],$_REQUEST['tipocliente']);
    }

    public function login (){
        $this->indxRepo = new IndexRepositorio();
        $data=$this->indxRepo->verificar($_REQUEST['usuario']);
        if($data[0]['pass']==$_REQUEST['contrasena']){
            session_start();
            $_SESSION['idUsuario']=$data[0]['idUsuario'];
            $_SESSION['usuario']=$data[0]['usuario'];
            $_SESSION['pass']=$data[0]['pass'];
            $_SESSION['nombre']=$data[0]['nombre'];
            $_SESSION['apellido']=$data[0]['apellido'];
            $_SESSION['email']=$data[0]['email'];
            $_SESSION['direccion']=$data[0]['direccion'];
            $_SESSION['telefono']=$data[0]['telefono'];
            $_SESSION['nombre_empresa']=$data[0]['nombre_empresa'];
            $_SESSION['idTipoUsuario']=$data[0]['idTipoUsuario'];
            echo 'correcto-'.$_SESSION['idTipoUsuario'];           
        }else{
            echo 'incorrecto';
        }
    }
    
    public function nosotros(){
        $this->_vista->rendePartial('nosotros');
    }
    
    public function cerrar(){
        session_start();
        session_destroy();
    }

} 