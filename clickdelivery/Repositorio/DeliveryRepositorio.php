<?php

namespace clickdelivery\Repositorio;
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Index;
class DeliveryRepositorio {
    
    public function plato_restaurant($idrest){
        $plato = Capsule::table('platos')->where('idRestaurante','=',$idrest)->get();
        return $plato;
    }
    
    public function guardar_delivery($id_rest){
        
    }
    
    public function guardar_detalle_delivey(){
        
    }
    
}