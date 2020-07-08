<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'user_id',
        'payment_firstname',
        'payment_lastname',
        'payment_phone',
        'payment_email',
        'payment_address',
        'payment_city',
        'payment_postcode',
        'discount',
        'payment_total'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
