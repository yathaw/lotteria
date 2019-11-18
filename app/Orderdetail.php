<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable = ['vocherno', 'qty', 'item_id', 'order_id'];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
}
