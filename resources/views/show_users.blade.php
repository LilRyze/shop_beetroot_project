@extends('layouts.template')
@section('title')
    <title>Users</title>
@endsection
@section('container-panel')
    <h2 class="col-sm-2 offset-1">Users</h2>
    <div class="container">
        @foreach($users as $user)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="8%">User ID</th>
                    <th width="27%">User name</th>
                    <th width="35%">Email</th>
                    <th width="30%">Role</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
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
