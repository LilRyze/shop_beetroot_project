<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'UserController@showCategories');
Route::get('/category/{name}', ['uses' => 'UserController@showGoods']);
Route::get('/goods/{latin_url}', ['uses' => 'UserController@showGood']);

Route::get('/order/{latin_url}', ['uses' => 'OrderController@makeOrder']);
Route::post('/create_order/{latin_url}', ['uses' => 'OrderController@createOrder']);

Route::get('/admin', 'AdminController@admin_view')->middleware('role:admin');
Route::get('/action_categories', ['uses' => 'AdminController@categoriesActions'])->middleware('role:admin');
Route::get('/action_goods', ['uses' => 'AdminController@goodsActions'])->middleware('role:admin');
Route::get('/action_orders', ['uses' => 'AdminController@ordersActions'])->middleware('role:admin');
Route::get('/action_users', ['uses' => 'AdminController@usersActions'])->middleware('role:admin');
Route::get('/action_categories/create_category', function () {
    return view('create_category');
})->middleware('role:admin');
Route::post('/action_categories/create_category', ['uses' => 'AdminController@createCategory'])->middleware('role:admin');
Route::get('/action_categories/show_categories', ['uses' => 'AdminController@showCategories'])->middleware('role:admin');
Route::get('/action_categories/delete_category', function () {
    return view('delete_category');
})->middleware('role:admin');
Route::post('/action_categories/delete_category', ['uses' => 'AdminController@deleteCategory'])->middleware('role:admin');
Route::get('/action_categories/edit_category', function () {
    return view('edit_category');
})->middleware('role:admin');
Route::post('/action_categories/edit_category', ['uses' => 'AdminController@editCategory'])->middleware('role:admin');
Route::get('/action_goods/create_good', function () {
    return view('create_good');
})->middleware('role:admin');
Route::post('/action_goods/create_good', ['uses' => 'AdminController@createGood'])->middleware('role:admin');
Route::get('/action_goods/delete_good', function () {
    return view('delete_good');
})->middleware('role:admin');
Route::post('/action_goods/delete_good', ['uses' => 'AdminController@deleteGood'])->middleware('role:admin');
Route::get('/action_goods/edit_good', function () {
    return view('edit_good');
})->middleware('role:admin');
Route::post('/action_goods/edit_good', ['uses' => 'AdminController@editGood'])->middleware('role:admin');
Route::get('/action_orders/create_order', function () {
    return view('create_order');
})->middleware('role:admin');
Route::post('/action_orders/create_order', ['uses' => 'AdminController@createOrder'])->middleware('role:admin');
Route::get('/action_orders/show_orders', ['uses' => 'AdminController@showOrders'])->middleware('role:admin');
