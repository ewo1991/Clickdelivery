<?php

namespace clickdelivery\Repositorio;

use Illuminate\Database\Capsule\Manager as Capsule;

class UsersRepositorie {

    public function getAll()
    {
        //$datos = Users::all();


        $datos = Capsule::table('usuario')->get();
        return $datos;
    }

    public function updated()
    {
        $curso = Cursos::find(2);
        $curso->descripcion = "historia";
        $curso->save();
    }

    public function deleted()
    {
        $curso = Cursos::find(2);
        $curso->deleted();
    }
} 