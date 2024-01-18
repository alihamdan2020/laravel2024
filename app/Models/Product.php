<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable=['productName','productPrice','ingredients'];
    
    //this is second step, to convert ingredient into an array
    protected $casts = ['ingredients' => 'array'];
}
