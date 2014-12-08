<?php

namespace clickdelivery\Repositorio;
session_start();
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Restaurante;
use clickdelivery\Entidades\Platos;
use clickdelivery\Entidades\Delivery;
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
    
    public function datos_delive(){
        $delivery=Capsule::table('delivery')->selectRaw("delivery.idDelivery")
                ->join('restaurante','delivery.idRestaurante','=','restaurante.idRestaurante')
                ->join('usuario','restaurante.idUsuario','=','usuario.idUsuario')
                ->where('usuario.idUsuario','=',$_SESSION['idUsuario'])
                ->where('delivery.estadodelivery','=','falta')
                ->get();
        return $delivery;
    }
    
    public function actualizar_delivery($id_Deli){
        $curso = Delivery::find($id_Deli);
        $curso->estadodelivery = "entregado";
        $curso->save();
    }
    
    public function plato_datos_join($id_delivery){
        $plato_join=Capsule::table('platos')->selectRaw("platos.idPlato,platos.nombre,platos.precio,detalle_delivery.cantidad,detalle_delivery.direccion")
                ->join('detalle_delivery','platos.idPlato','=','detalle_delivery.idPlato')
                ->where('detalle_delivery.idDelivery','=',$id_delivery)
                ->get();
        return $plato_join;
    }
    
    public function select_plato(){
        $idrest= Capsule::table('restaurante')->where('idUsuario','=',$_SESSION['idUsuario'])->get();
        $datos = Capsule::table('platos')->where('idRestaurante','=',$idrest[0]['idRestaurante'])->get();
        return $datos;
    }
    
    public function datos_restaurante(){
        $datos_rest = Capsule::table('restaurante')->where('idUsuario','=',$_SESSION['idUsuario'])->get();
        return $datos_rest;
    }
    
    public function actualizar_empresa($nom,$tef,$direc,$idrest,$foto=NULL){
        $index = Restaurante::find($idrest);
        $index->nombre = $nom;
        $index->telefono = $tef;
        $index->direccion = $direc;
        $index->logo=$foto;
        $index->save();
    }
    
    public function actualizar_plato($idpla,$nom,$prci,$desc,$foto=NULL){
        $index = Platos::find($idpla);
        $index->nombre = $nom;
        $index->precio = $prci;
        $index->descripcion = $desc;
        $index->foto=$foto;
        $index->save();
    }
    
    public function eliminar($ideli){
        $curso = Platos::find($ideli);
        $curso->delete();
    }
    
    public function guardar_nuevo_plato($nom,$preci,$descrip,$foto=NULL){
        $idrestauran=$this->datos_restaurante();
//        print_r($foto);exit;
        $plato=new Platos;
        $plato->nombre=$nom;
        $plato->precio=$preci;
        $plato->descripcion=$descrip;
        $plato->foto=$foto;
        $plato->idRestaurante=$idrestauran[0]['idRestaurante'];
        $plato->save();
    }
    
    public function plato_datos($idplato){
        $datos = Capsule::table('platos')->where('idPlato','=',$idplato)->get();
//        print_r($datos);exit;
        return $datos;
    }
    
}