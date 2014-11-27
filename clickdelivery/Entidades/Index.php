<?php
namespace clickdelivery\Entidades;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $primaryKey = 'idUsuario';
    protected $table = 'usuario';
    public $timestamps = false;
}