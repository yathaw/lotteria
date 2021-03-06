<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderdetail;
use App\Order;
use App\Item;
use App\Category;
use Carbon\Carbon;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');


        $orders = DB::table("orders")
                    ->select(
                            'orders.*',
                            'users.name as username',
                            'items.name as item_name',
                            'items.price as item_price',
                            'orderdetails.item_id as item_id',
                            DB::raw('SUM(qty) as qty')
                        )
                    ->join('orderdetails', 'orderdetails.order_id', '=', 'orders.id')
                    ->join('items', 'items.id', '=', 'orderdetails.item_id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->where("orderdate","=", $today)
                    ->groupBy("item_id")


                    ->get();
        // dd($orders);

        return view('home', compact('orders'));
    }
}
