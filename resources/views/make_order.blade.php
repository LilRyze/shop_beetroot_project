@extends('layouts.template')

@section('title')
    @parent
    <title>Make Order</title>
@endsection
@section('container-panel')
    <form method="post" action="/create_order/{{$good->latin_url}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h4>Your order for {{$good->name}}</h4>
        <br>
        <div class="form-group row">
            <label for="customer_name" class="form-group">First and second name</label>
                <input name="customer_name" type="text" class="form-control" id="customer_name"
                       placeholder="First and second name">
        </div>
        <div class="form-group row">
            <label for="city" class="form-group">City</label>
            <input name="city" type="text" class="form-control" id="city"
                   placeholder="City">
        </div>
        <div class="form-group row">
            <label for="phone" class="form-group">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone"
                   placeholder="Phone">
        </div>
        <div class="form-group row">
            <label for="comment" class="form-group">Comment</label>
            <input name="comment" type="text" class="form-control" id="comment"
                   placeholder="Comment">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-dark">Submit order</button>
        </div>
    </form>
@endsection
