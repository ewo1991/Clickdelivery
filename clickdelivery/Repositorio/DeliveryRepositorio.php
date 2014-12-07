<?php
namespace clickdelivery\Repositorio;
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Delivery;
use clickdelivery\Entidades\Detalle_delivery;
use clickdelivery\Entidades\Platos;
class DeliveryRepositorio {
    
    public function plato_restaurant($idrest){
        $plato = Capsule::table('platos')->where('idRestaurante','=',$idrest)->get();
        return $plato;
    }
    
    public function guardar_delivery($id_rest){
        session_start();
        if(!empty($_SESSION['idUsuario'])){$usuario=$_SESSION['idUsuario'];}else{$usuario=NULL;}
        $delivery=new Delivery;
        $delivery->idRestaurante=$id_rest;
        $delivery->idUsuario=$usuario;
        $delivery->save();
    }
    
    public function guardar_detalle_delivey($_datos){
        $id_max=$this->select_id_max();
        $direccion=$_datos['cordenadas'].' numero de casa: '.$_datos['numero_casa'];
        foreach ($_datos['id_plat']as $key=>$value){
        $d_delivery=new Detalle_delivery;
        $d_delivery->idDelivery=$id_max;
        $d_delivery->idPlato=$value;
        $d_delivery->direccion=$direccion;
        $d_delivery->cantidad=$_REQUEST['plato_cantidad'][$key];
        $d_delivery->save();
        }
    }
    
    public function select_id_max(){
        $max_id = Capsule::table('delivery')->max('idDelivery');
        return $max_id;
    }
    
    public function eviar_correo($datos){
        $id_max=$this->select_id_max();
        $datos_correo=  Platos::select("platos.nombre,platos.precio,usuario.email,detalle_delivery.direccion")
                ->join("detalle_delivery","platos.idPlato","=","detalle_delivery.idPlato")
                ->join("delivery","detalle_delivery.idDelivery","=","delivery.idDelivery")
                ->join("restaurante","delivery.idRestaurante","=","restaurante.idRestaurante")
                ->join("usuario","restaurante.idUsuario","=","usuario.idUsuario")
                ->where("restaurante.idRestaurante","=",$datos['idresta'])
                ->where("delivery.idDelivery","=",$id_max)
                ->get();
        print_r($datos_correo);exit;
    }
    
}