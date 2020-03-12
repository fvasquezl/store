<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{

   public function products()
   {
       return $this->hasMany(Product::class);
   }

    public function setNameAttribute($name) {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
}
