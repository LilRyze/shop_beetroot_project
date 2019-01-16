@extends('layouts.template')
@section('title')
    <title>Delete Category</title>
@endsection
@section('container-panel')
<h3>Delete Category</h3>

    <form method="post" action="/action_categories/delete_category" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="name" class="form-group">Category Name</label>
                <input name="name" type="text" class="form-control" id="name"
                       placeholder="Category Name">
            </div>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Delete Category</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
