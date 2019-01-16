@extends('layouts.template')
@section('title')
    <title>Actions with Goods</title>
@endsection
@section('container-panel')
    <h3>Actions with Goods</h3>
    <br>
    <div class="container">
        <div class="row">
            <a href="/action_goods/create_good"><button type="button" class="btn btn-dark">Create Good</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_goods/delete_good"><button type="button" class="btn btn-dark">Delete Good</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_goods/edit_good"><button type="button" class="btn btn-dark">Edit Good</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/"><button type="button" class="btn btn-dark">Go home</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
        </div>
    </div>

@endsection
