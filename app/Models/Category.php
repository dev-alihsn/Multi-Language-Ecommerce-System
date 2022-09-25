<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TransLatableContract
{
    use HasFactory;
    use TransLatable;

    public $translatedAttributes = ['name','slug'];
    protected $fillable = ['name','slug','user_id','parent_id'];

    function products(){
        return $this->hasMany(Product::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }

    function parent(){
        return $this->belongsTo(self::class,'parent_id');
    }

    function supCategories(){
        return $this->hasMany(self::class,'parent_id');
    }
}
