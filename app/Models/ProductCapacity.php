<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCapacity extends Model
{
    use HasFactory;
    protected $fillable = ['quantity', 'price', 'product_id','capacity_id'];
}
