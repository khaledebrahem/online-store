<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name','image','slug'];

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }
    public function getAvatarAttribute()
    {
        return asset('storage/'.$this->attributes['image']);
    }
}
