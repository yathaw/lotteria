<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['orderdate', 'vocherno', 'total'];

    public function orderdetail()
    {
        return $this->hasOne('App\Orderdetail');
    }
    
}
