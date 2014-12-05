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
        $this->empreRepo->gauardar_empresa($_REQUEST['nombreempresa'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['nombre_foto']);
    }
    
    public function actualiza_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->actualizar_empresa($_REQUEST['nombreempresa'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['idrestaurante'],$_REQUEST['nombre_foto']);
    }
    
    public function plato_empresa(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->_vista->platos=$this->empreRepo->select_plato();
        $this->_vista->rendePartial('plato_empresa');        
    }
    
    public function editar_plato(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->empreRepo->actualizar_plato($_REQUEST['idplato'],$_REQUEST['nom_plato'],$_REQUEST['precio_plato'],$_REQUEST['descr_plato'],$_REQUEST['foto_act_plato']);
        $this->plato_empresa();
    }
    
    public function pagina_editar_plato(){
        $this->empreRepo=new EmpresaRepositorio();
        $this->_vista->dato_plato=  $this->empreRepo->plato_datos($_REQUEST['idplato']);;
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
        $this->empreRepo->guardar_nuevo_plato($_REQUEST['nombre_plato'],$_REQUEST['precio_plato'],$_REQUEST['descripcion_plato'],$_REQUEST['foto_plato_nuevo']);
        $this->plato_empresa();
    }
    
    public function imagen_empresa(){
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
        {
	if(isset($_GET["delete"]) && $_GET["delete"] == true)
	{
		$name = $_POST["filename"];
		if(file_exists('./uploads/'.$name))
		{
			unlink('./uploads/'.$name);
			echo json_encode(array("res" => true));
		}
		else
		{
			echo json_encode(array("res" => false));
		}
	}
	else
	{
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize = $_FILES["file"]["size"];

		if(!is_dir("uploads/"))
			mkdir("uploads/", 0777);

		if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$file))
		{
		}
	}
        }
    }

} 