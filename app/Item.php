<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'price', 'photo', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orderdetail()
    {
        return $this->hasOne('App\Orderdetail');
    }
    
}
