@extends('layouts.template')
@section('title')
    <title>Actions with Categories</title>
@endsection
@section('container-panel')
<h3>Actions with Categories</h3>
<br>
<div class="container">
    <div class="row">
        <a href="/action_categories/create_category"><button type="button" class="btn btn-dark">Create Category</button></a>
    </div>
    <br>
    <div class="row">
    <a href="/action_categories/show_categories"><button type="button" class="btn btn-dark">Show Categories</button></a>
    </div>
    <br>
    <div class="row">
    <a href="/action_categories/delete_category"><button type="button" class="btn btn-dark">Delete Category</button></a>
    </div>
    <br>
    <div class="row">
    <a href="/action_categories/edit_category"><button type="button" class="btn btn-dark">Edit Category</button></a>
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
