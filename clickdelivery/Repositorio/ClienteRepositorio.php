<?php

namespace clickdelivery\Repositorio;
session_start();
use Illuminate\Database\Capsule\Manager as Capsule;
use clickdelivery\Entidades\Index;
class ClienteRepositorio {
    
    public function actuli_cliente($nom,$tef=NULL,$direc=NULL,$email,$pass){
        $index = Index::find($_SESSION['idUsuario']);
        $index->nombre = $nom;
        $index->telefono = $tef;
        $index->direccion = $direc;
        $index->email = $email;
        $index->pass = $pass;
        $index->save();
    }
}