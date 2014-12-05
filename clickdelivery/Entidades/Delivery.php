<?php
namespace clickdelivery\Entidades;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $primaryKey = 'idDelivery';
    protected $table = 'delivery';
    public $timestamps = false;
}