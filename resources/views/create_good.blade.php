@extends('layouts.template')
@section('title')
    <title>Create Good</title>
@endsection
@section('container-panel')
    <h3>Create Good</h3>
    <br>
    <form method="post" action="/action_goods/create_good" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="name" class="form-group">Goods Name</label>
                <input name="name" type="text" class="form-control" id="name"
                       placeholder="Category Name">
            </div>
            <div class="form-group- row">
                <label for="category_id" class="form-group">Category ID</label>
                <input name="category_id" type="text" class="form-control" id="category_id"
                       placeholder="Category ID">
            </div>
            <div class="form-group- row">
                <label for="description" class="form-group">Description</label>
                <input name="description" type="text" class="form-control" id="description"
                       placeholder="Description">
            </div>
            <div class="form-group- row">
                <label for="price" class="form-group">Price</label>
                <input name="price" type="text" class="form-control" id="price"
                       placeholder="Price">
            </div>
            <div class="form-group row">
                <label for="latin_url" class="form-group">Latin URL</label>
                <input name="latin_url" type="text" class="form-control" id="latin_url"
                       placeholder="Latin URL">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Create Goods</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
