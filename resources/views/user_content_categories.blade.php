@extends('layouts.template')
@section('title')
    @parent
<title>Categories</title>
    @endsection

@section('container-panel')
    <div class="container">
        <div class="row">
    @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{Illuminate\Support\Facades\Storage::url($category->latin_url)}}.png" data-holder-rendered="true">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/category/{{$category->latin_url}}">{{$category->name}}</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
        </div>
    </div>
@endsection
