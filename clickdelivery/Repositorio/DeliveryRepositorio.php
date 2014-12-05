<?php
namespace clickdelivery\Repositorio;
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Delivery;
use clickdelivery\Entidades\Detalle_delivery;
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
        foreach ($_datos['id_plat']as $key=>$value){
        $d_delivery=new Detalle_delivery;
        $d_delivery->idDelivery=$id_max;
        $d_delivery->idPlato=$value;
        $d_delivery->direccion=NULL;
        $d_delivery->cantidad=$_REQUEST['plato_cantidad'][$key];
        $d_delivery->save();
        }
    }
    
    public function select_id_max(){
        $max_id = Capsule::table('delivery')->max('idDelivery');
        return $max_id;
    }
    
}