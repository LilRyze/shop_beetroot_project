<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Category;
use App\Order;
use App\Goods_Order;

class AdminController extends Controller
{
    public function admin_view()
    {
        return view('admin_content');
    }

    public function categoriesActions()
    {
        return view('categories_actions');
    }

    public function goodsActions()
    {
        return view('goods_actions');
    }

    public function ordersActions()
    {
        return view('orders_actions');
    }

    public function usersActions()
    {
        return view('users_actions');
    }

    public function createCategory(Request $request)
    {
        try {
            Category::create([
                'name' => $request->name,
                'latin_url' => $request->latin_url,
            ]);
            echo 'Created';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function showCategories()
    {
        try {
            $categories = Category::all();
            return view('show_categories', ['categories' => $categories]);
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function deleteCategory(Request $request)
    {
        try {
            Category::where('name', $request->name)->delete();
            echo 'Category was deleted';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function editCategory(Request $request)
    {
        try {
            Category::where('name', $request->name_to_change)->update([
                'name' => $request->name,
                'latin_url' => $request->latin_url]);
            echo 'Category updated';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function createGood(Request $request)
    {
        try {
            Good::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'latin_url' => $request->latin_url,
            ]);
            echo 'Created';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function deleteGood(Request $request)
    {
        try {
            Good::where('name', $request->name)->delete();
            echo 'Good was deleted';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function editGood(Request $request)
    {
        try {
            Good::where('name', $request->name_to_change)->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'price' => $request->price,
                'latin_url' => $request->latin_url]);
            echo 'Goods updated';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function createOrder(Request $request)
    {
        try {
            $goods_id = $request->goods_id;
            $price = Good::where('id', $goods_id)->first()->price;
            $order = new Order;
            $order->customer_name = $request->customer_name;
            $order->city = $request->city;
            $order->phone = $request->phone;
            $order->comment = $request->comment;
            $order->save();
            $id = $order->id;
            Goods_Order::create([
                'goods_id' => $goods_id,
                'order_id' => $id,
                'amount' => $price,
            ]);
            echo 'Order created';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function showOrders()
    {
        try {
            $orders = Order::all();
            return view('show_orders', ['orders' => $orders]);
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
