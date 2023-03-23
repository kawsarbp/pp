<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subcategory_id',
        'brand_id',
        'product_name',
        'product_title',
        'product_price',
        'product_discount',
        'product_quantity',
        'product_photo',
        'description',
        'status',
    ];
}
