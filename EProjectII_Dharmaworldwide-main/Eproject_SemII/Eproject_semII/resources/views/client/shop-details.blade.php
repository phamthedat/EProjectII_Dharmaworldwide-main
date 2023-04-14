@section('title', 'Product Details')
@extends('client.layouts.master-1')
@section('custom-style')

@endsection
@section('main-content')
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large shadow" src="{{$news->thumbnail}}"
                                 alt="" data-pagespeed-url-hash="232668656"
                                 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$news->name}}</h3>
                        <div class="product__details__price">{{number_format($news->price)}} $</div>
                            <li><b>Description :</b> <span>{{$news->description}}</span></li>
                            <li><b>Label :</b> <span>{{$news->labelTitle}}</span></li>
                            <li><b>Tag :</b> <span>{{$news->Tag}}</span></li>
                            <li><b>Capacity :</b> <span>{{$news->weight}}</span></li>
                        </ul>
                        <div class="product__details__quantity mt-3 pt-5 border-top d-block">
                            <div class="quantity d-inline-block mr-2">
                                <div class="pro-qty">Quantity:
                                    <input type="number"  min="1"
                                           name="quantity" value="1">
                                </div>
                            </div>
                            <a href="/shopping/add?productId={{$news->id}}&productQuantity=1"" class="primary-btn">Add to cart</a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <div class="nav nav-tabs" role="tablist">
                            <div class="section-title related__product__title ">
                                <h2>Related Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-product">
        <div class="container">
            <div class="row">
                @foreach($list as $obj)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{$obj->thumbnail}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="/productDetail/{{$obj->id}}"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="/shopping/add?productId={{$obj->id}}&productQuantity=1"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{$obj->name}}</a></h6>
                            <h5>{{number_format($obj->price)}} $</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('custom-js')

@endsection
