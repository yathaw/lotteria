<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderdetail;
use App\Order;
use Carbon\Carbon;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                'total'          => $total
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
