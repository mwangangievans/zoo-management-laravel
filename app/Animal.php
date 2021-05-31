<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
      protected $fillable = [
        'name',
        'category_id',
        'description',
        'image',
    ];
     public function category()
    {
        return $this->belongTo(Category::class);
    }
}
