<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_icon',
        'status',
    ];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
    public function subcategoryfrontend()
    {
        return $this->hasMany(Subcategory::class,'category_id');
    }

}
