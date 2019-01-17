@extends('layouts.template')
@section('title')
    <title>Delete User</title>
@endsection
@section('container-panel')
    <h3>Delete User</h3>

    <form method="post" action="/action_users/delete_user" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="id" class="form-group">User ID</label>
                <input name="id" type="text" class="form-control" id="id"
                       placeholder="User ID">
            </div>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Delete User</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
