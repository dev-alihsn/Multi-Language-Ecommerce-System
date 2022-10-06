<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $filable = ['title','description','quantity','price','category_id'];

    function categories(){
        return $this->belongsTo(Category::class);
    }

    function discounts(){
        return $this->belongsToMany(Discount::class);
    }

    function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
