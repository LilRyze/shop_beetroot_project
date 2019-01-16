@extends('layouts.template')
@section('title')
    <title>Orders</title>
@endsection
@section('container-panel')
    <h2 class="col-sm-2 offset-1">Orders</h2>
    <div class="container">
        @foreach($orders as $order)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="5%">Order ID</th>
                    <th width="20%">Customer name</th>
                    <th width="20%">City</th>
                    <th width="20%">Phone</th>
                    <th width="35%">Comment</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->city}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->comment}}</td>
                </tr>
                </tbody>
            </table>
        @endforeach
        <div class="row">
            <a href="/"><button type="button" class="btn btn-dark">Go home</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
        </div>
    </div>
@endsection
