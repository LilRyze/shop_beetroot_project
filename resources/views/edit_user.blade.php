@extends('layouts.template')
@section('title')
    <title>Edit User</title>
@endsection
@section('container-panel')
    <h3>Edit User</h3>
    <br>
    <form method="post" action="/action_users/edit_user" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group- row">
                <label for="id" class="form-group">ID of User to change</label>
                <input name="id" type="text" class="form-control" id="id"
                       placeholder="ID of User to change">
            </div>
            <div class="form-group- row">
                <label for="name" class="form-group">User Name</label>
                <input name="name" type="text" class="form-control" id="name"
                       placeholder="User Name">
            </div>
            <div class="form-group row">
                <label for="email" class="form-group">Email</label>
                <input name="email" type="text" class="form-control" id="email"
                       placeholder="Email">
            </div>
            <div class="form-group row">
                <label for="password" class="form-group">Password</label>
                <input name="password" type="password" class="form-control" id="password"
                       placeholder="Password">
            </div>
            <div class="form-group row">
                <label for="role" class="form-group">Role</label>
                <input name="role" type="text" class="form-control" id="role"
                       placeholder="Role">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Edit User</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

@endsection
