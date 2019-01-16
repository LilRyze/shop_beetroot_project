@extends('layouts.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;
        cursor: zoom-in;
    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }
    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
</style>
@section('title')
    @parent
    <title>{{$good->name}}</title>
@endsection
@section('container-panel')
<div class="container">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img class="card-img-top" style="height: 46%; width: 100%; display: block;" src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}.png" data-holder-rendered="true"></a></div>
                    </div> <!-- slider-product.// -->
                    <br>
                    <div class="img-small-wrap">
                        <div class="item-gallery"> <img src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}-1.png" data-holder-rendered="true" alt=""> </div>
                        <div class="item-gallery"> <img src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}-2.png" data-holder-rendered="true" alt=""> </div>
                        <div class="item-gallery"> <img src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}-3.png" data-holder-rendered="true" alt=""> </div>
                        <div class="item-gallery"> <img src="{{Illuminate\Support\Facades\Storage::url($good->latin_url)}}-4.png" data-holder-rendered="true" alt=""> </div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h3 class="title mb-3">{{$good->name}}</h3>

                    <p class="price-detail-wrap">
	<span class="price h3 text-warning">
		<span class="currency">US $</span><span class="num">{{$good->price}}</span>
	</span>
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd><p>{{$good->description}}</p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Model</dt>
                        <dd>{{$good->name}}</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Delivery</dt>
                        <dd>Russia, USA, and Europe</dd>
                    </dl>  <!-- item-property-hor .// -->
                    <br>
                    <hr>
                    <a href="/order/{{$good->latin_url}}" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> BUY NOW </a>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
</div>
    @endsection
