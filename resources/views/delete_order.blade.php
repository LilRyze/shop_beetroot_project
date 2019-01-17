@extends('layouts.template')
@section('title')
    <title>Delete Order</title>
@endsection
@section('container-panel')
    <h3>Delete Order</h3>

    <form method="post" action="/action_orders/delete_order" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="id" class="form-group">Order ID</label>
                <input name="id" type="text" class="form-control" id="id"
                       placeholder="Order ID">
            </div>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Delete Order</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
