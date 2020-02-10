<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etalase extends Model
{
    protected $table = 'etalase';

    protected $fillable = ['name', 'description', 'user_id', 'store_id',];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'etalase_products', 'etalase_id', 'product_id');
    }
    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
