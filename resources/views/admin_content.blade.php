@extends('layouts.template')
@section('title')
<title>Admin Panel</title>
@endsection

@section('container-panel')
    <a href="/action_categories"><button type="button" class="btn btn-dark">Action with Categories</button></a>
    <a href="/action_goods"><button type="button" class="btn btn-dark">Action with Goods</button></a>
    <a href="/action_orders"><button type="button" class="btn btn-dark">Action with Orders</button></a>
    <a href="/action_users"><button type="button" class="btn btn-dark">Action with Users</button></a>
@endsection
