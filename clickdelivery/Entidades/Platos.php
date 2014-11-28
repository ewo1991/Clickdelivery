<?php
namespace clickdelivery\Entidades;

use Illuminate\Database\Eloquent\Model;

class Platos extends Model
{
    protected $primaryKey = 'idPlato';
    protected $table = 'platos';
    public $timestamps = false;
}