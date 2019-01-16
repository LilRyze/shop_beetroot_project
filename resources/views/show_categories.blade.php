@extends('layouts.template')
@section('title')
    <title>Categories</title>
@endsection
@section('container-panel')
<h2 class="col-sm-2 offset-1">Categories</h2>
<div class="container">
@foreach($categories as $category)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Category Name</th>
                        <th width="25%">Category ID</th>
                        <th width="35%">Latin URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->latin_url}}</td>
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
