<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UserController extends Controller
{
    public function showCategories()
    {
        try {
            $categories = App\Category::all();
            return view('user_content_categories', ['categories' => $categories]);
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function showGoods($name)
    {
        try {
            $category = App\Category::where('latin_url', $name)->first();
            if ($category) {
                $goods = App\Good::where('category_id', $category->id)->get();
                return view('user_content_goods', ['goods' => $goods]);
            }

        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function showGood($latin_url)
    {
        try {
                $good = App\Good::where('latin_url', $latin_url)->first();
                return view('user_content_good', ['good' => $good]);
        }   catch (\Exception $e) {
                echo $e;
        }
    }



}
