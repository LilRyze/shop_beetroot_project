@extends('layouts.template')
@section('title')
    <title>Edit Order</title>
@endsection
@section('container-panel')
    <h3>Edit Order</h3>
    <br>
    <form method="post" action="/action_orders/edit_order" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="order_id_to_change" class="form-group">What to change(Order ID)</label>
                <input name="order_id_to_change" type="text" class="form-control" id="order_id_to_change"
                       placeholder="Order ID to change">
            </div>
            <div class="form-group- row">
                <label for="goods_id_to_change" class="form-group">What to change(Goods ID)</label>
                <input name="goods_id_to_change" type="text" class="form-control" id="goods_id_to_change"
                       placeholder="Goods ID to change">
            </div>
            <div class="form-group- row">
                <label for="customer_name" class="form-group">Customer Name</label>
                <input name="customer_name" type="text" class="form-control" id="customer_name"
                       placeholder="Customer Name">
            </div>
            <div class="form-group- row">
                <label for="city" class="form-group">City</label>
                <input name="city" type="text" class="form-control" id="city"
                       placeholder="City">
            </div>
            <div class="form-group- row">
                <label for="phone" class="form-group">Phone</label>
                <input name="phone" type="text" class="form-control" id="description"
                       placeholder="Phone">
            </div>
            <div class="form-group- row">
                <label for="comment" class="form-group">Comment</label>
                <input name="comment" type="text" class="form-control" id="comment"
                       placeholder="Comment">
            </div>
            <div class="form-group row">
                <label for="goods_id" class="form-group">New Goods ID</label>
                <input name="goods_id" type="text" class="form-control" id="goods_id"
                       placeholder="New Goods ID">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Edit Order</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
