<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\orderproducts;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orders()
    {
        $orders=DB::table('orders')->orderBy('id', 'desc')->paginate(3);
        // dd($orders);
        return view('user.order',compact('orders'));
    }

    public function invoice($id)
    {
        $info=DB::table('orders')->where('id', $id)->first();
        $order_details= orderproducts::orderBy('id', 'desc')->where('order_id', $id)->get();
        // dd($info);
        return view('user.invoice',compact('info','order_details'));
    }
}
