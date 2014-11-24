<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 17/10/14
 * Time: 05:23 PM
 */
use clickdelivery\Repositorio\UsersRepositorie;
class usuariosControlador extends Controlador{

    protected $userRepo;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->userRepo = new UsersRepositorie();
        $this->_vista->usuarios=$this->userRepo->getAll();
        $this->_vista->renderizar('index');
    }

    public function show($id)
    {
        $datos = $this->_users->show($id);

    }

    public function editar($id)
    {
        //$datos = $_POST;
        $datos = [
            "usuario" => "juan",
            "apellidos"=> "juan"
        ];

        $bol = $this->_users->update($datos,$id);
        echo $bol;
        exit;
    }

    public function nuevo()
    {
        //$datos = $_POST;
        $datos = [
            "usuario" => "juan",
            "apellidos"=> "juan"
        ];

        $bol = $this->_users->add($datos);
        echo $bol;
        exit;
    }

    public function eliminar($id)
    {
        $bol = $this->_users->destroy($id);
        echo $bol;
        exit;
    }
} 