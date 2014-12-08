<?php

namespace clickdelivery\Repositorio;
session_start();
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Index;
class ClienteRepositorio {
    
    public function actuli_cliente($nom,$tef=NULL,$direc=NULL,$email,$pass,$foto=NULL){
        $index = Index::find($_SESSION['idUsuario']);
        $index->nombre = $nom;
        $index->telefono = $tef;
        $index->direccion = $direc;
        $index->email = $email;
        $index->pass = $pass;
        $index->nombre_empresa=$foto;
        $index->save();
    }
    
    public function datos_pedidos(){
        $datos_peditos=  Capsule::table('delivery')->selectRaw('delivery.idDelivery,delivery.estadodelivery,(platos.nombre) as plato,platos.precio,detalle_delivery.cantidad,restaurante.nombre')
                ->join('detalle_delivery','delivery.idDelivery','=','detalle_delivery.idDelivery')
                ->join('platos','detalle_delivery.idPlato','=','platos.idPlato')
                ->join('restaurante','platos.idRestaurante','=','restaurante.idRestaurante')
                ->where('delivery.idUsuario','=',$_SESSION['idUsuario'])
                ->get();
//        print_r($datos_peditos);exit;
        return $datos_peditos;
                
    }
}