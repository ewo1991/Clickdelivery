<?php

namespace clickdelivery\Repositorio;
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Index;
class DeliveryRepositorio {
    
    public function plato_restaurant($idrest){
        $plato = Capsule::table('platos')->get();
        return $plato;
    }
    
}