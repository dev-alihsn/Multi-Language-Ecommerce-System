<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Discount extends Model implements TransLatableContract
{
    use HasFactory;
    use TransLatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['name','discount_precent','coupon'];

    function products(){
        return $this->belongsToMany(Product::class);
    }
}
