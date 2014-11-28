<?php

namespace clickdelivery\Repositorio;
session_start();
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Restaurante;
class EmpresaRepositorio {
    
    public function gauardar_empresa($nom,$telef,$direc,$logo=null,$tipores=null){
        
        $rest=new Restaurante;
        $rest->nombre=$nom;
        $rest->direccion=$direc;
        $rest->telefono=$telef;
        $rest->tipoRestauran=$tipores;
        $rest->idUsuario=$_SESSION['idUsuario'];
        $rest->logo=$logo;
        $rest->save();
    }
    
    public function select_plato(){
        $datos = Capsule::table('platos')->where('idRestaurante','=',$restauran)->get();
        print_r($datos);exit;
        return $datos;
    }
    
    public function datos_restaurante(){
        $datos_rest = Capsule::table('restaurante')->where('idUsuario','=',$_SESSION['idUsuario'])->get();
        return $datos_rest;
    }
    
    public function actualizar_empresa($nom,$tef,$direc,$idrest){
        $index = Restaurante::find($idrest);
        $index->nombre = $nom;
        $index->telefono = $tef;
        $index->direccion = $direc;
        $index->save();
    }
    
}
