<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Category;
use App\User;
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

    public function deleteOrder(Request $request)
    {
        try {
            Order::where('id', $request->id)->delete();
            Goods_Order::where('order_id', $request->id)->delete();
            echo 'Order was deleted';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function editOrder(Request $request)
    {
        try {
            $price = Good::where('id', $request->goods_id)->first()->price;
            Goods_Order::where('order_id', $request->order_id_to_change)->where('goods_id', $request->goods_id_to_change)->update([
                'amount' => $price,
                'goods_id' => $request->goods_id,
            ]);
            Order::where('id', $request->order_id_to_change)->update([
                'customer_name' => $request->customer_name,
                'city' => $request->city,
                'phone' => $request->phone,
                'comment' => $request->comment,
            ]);
            echo 'Order updated';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function createUser(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
            echo 'User created';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function showUsers()
    {
        try {
            $users = User::all();
            return view('show_users', ['users' => $users]);
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function deleteUser(Request $request)
    {
        try {
            User::where('id', $request->id)->delete();
            echo 'User was deleted';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function editUser(Request $request)
    {
        try {
            User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                ]);
            echo 'User updated';
            sleep(5);
            return redirect('/admin');
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
