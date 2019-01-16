@extends('layouts.template')
@section('title')
    @parent
    <title>Goods</title>
@endsection

@section('container-panel')
    <div class="container">
        <div class="row">
            @foreach($goods as $good)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" style="height: 275px; width: 100%; display: block;" src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">{{substr($good->description, 0, 150)}}...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/goods/{{$good->latin_url}}">{{$good->name}}</a></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">{{$good->price}} $</button>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
