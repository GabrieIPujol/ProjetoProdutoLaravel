<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name','price','category_id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Images(){
        return $this->hasMany(ProductImage::class);
    }

}
