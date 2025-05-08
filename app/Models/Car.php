<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
     protected $table='_car';
    protected $fillable=[
        'car_name',
        'car_description',
        'car_price',
        'car_image'
    ];
}
