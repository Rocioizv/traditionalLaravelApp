<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{

    use HasFactory;

    protected $table = 'tablaFurniture';
    
    protected $fillable = ['model' , 'price'];
}