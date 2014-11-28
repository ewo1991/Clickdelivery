<?php
namespace clickdelivery\Entidades;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $primaryKey = 'idRestaurante';
    protected $table = 'restaurante';
    public $timestamps = false;
}