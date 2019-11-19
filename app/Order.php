<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['orderdate', 'vocherno', 'total', 'user_id'];

    public function orderdetail()
    {
        return $this->hasOne('App\Orderdetail');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
