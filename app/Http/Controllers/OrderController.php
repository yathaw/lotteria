<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderdetail;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    
    public function store(Request $request)
    {
        $cards = request('cart');
        $invoiceno = request('invoiceno');
        $total = request('total');

        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

        $order = Order::create([
                'orderdate'      => $today,
                'vocherno'       => $invoiceno,
                'total'          => $total,
                'user_id'        => Auth::id(),
            ]);

        foreach ($cards as $card) 
        {
            $id = $card['id'];
            $name = $card['name'];
            $price = $card['price'];
            $qty = $card['qty'];

            Orderdetail::create([
                'vocherno'      => $invoiceno,
                'qty'           => $qty,
                'item_id'       => $id,
                'order_id'      => $order->id
            ]);

        }

        return "OK";
    }

    
}
