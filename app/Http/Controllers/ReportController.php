<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{

    public function index()
    {
        return view('report');
    }

    public function search(Request $request)
    {
        $startdate = request('startdate');
        $enddate = request('enddate');


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
                    ->whereBetween('orderdate', [$startdate, $enddate])
                    ->groupBy("item_id")
                    ->get();

        return response()->json([
            'searchresult'=>$orders
        ]);
        
    }

    
}
