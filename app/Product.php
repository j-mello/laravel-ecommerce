<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Voyager Relationship
    public function categoryId()
    {
        return $this->belongsTo('App\Category');
    }

    // Get product category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
