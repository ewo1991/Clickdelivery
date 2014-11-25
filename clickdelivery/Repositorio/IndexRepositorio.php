<?php

namespace clickdelivery\Repositorio;

use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Index;
class IndexRepositorio {

    public function guardar($usu,$pas,$nom,$ape,$ema,$tiu,$dir=NULL,$tef=NULL,$nom_en=NULL)
    {
//        print_r($usu.' '.$pas.' '.$nom.' '.$ape.' '.$ema.' '.$tiu);exit;
        $usuario=new Index;
        $usuario->usuario=$usu;
        $usuario->pass=$pas;
        $usuario->nombre=$nom;
        $usuario->apellido=$ape;
        $usuario->email=$ema;
        $usuario->direccion=$dir;
        $usuario->telefono=$tef;
        $usuario->nombre_empresa=$nom_en;
        $usuario->idTipoUsuario=$tiu;
        $usuario->save();
    }

    public function verificar($user)
    {
        $datos = Capsule::table('usuario')->where('usuario','=',$user)->get();
        return $datos;

    }
}