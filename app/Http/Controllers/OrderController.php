<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Order;
use App\Goods_Order;

class OrderController extends Controller
{

    public function makeOrder($latin_url)
    {
        try {
            $good = Good::where('latin_url', $latin_url)->first();
            return view('make_order', ['good' => $good]);
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function createOrder(Request $request, $latin_url)
    {
        $good = Good::where('latin_url', $latin_url)->first();
        $order = new Order;
        $order->customer_name = $request->customer_name;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->comment = $request->comment;
        $order->save();
        $id = $order->id;
        Goods_Order::create([
            'goods_id' => $good->id,
            'order_id' => $id,
            'amount' => $good->price,
        ]);
        return view('order_successfully');
    }
}
