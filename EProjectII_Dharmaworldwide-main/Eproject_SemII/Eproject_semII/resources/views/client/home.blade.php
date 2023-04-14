@section('title', 'Home')

@extends('.client.layouts.master')

@section('custom-style')

    <style>
        .featured__item {
            margin-bottom: 50px;
            border: solid green 1px !important;
            padding: 10px 10px;
            border-radius: 10px;
        }

    </style>

@endsection

@section('main-content')


    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured products</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vegetables">Progressive House</li>
                            <li data-filter=".bulb">FutureBass</li>
                            <li data-filter=".fruit">Bigroom</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($rau as $obj)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{$obj->thumbnail}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="/productDetail/{{$obj->id}}"><i class="fas fa-info"></i></a>
                                    </li>
                                    <li><a href="/shopping/add?productId={{$obj->id}}&productQuantity=1"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$obj->name}}</a></h6>
                                <h5>{{number_format($obj->price)}} $</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($cu as $obj)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix bulb">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{$obj->thumbnail}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="/productDetail/{{$obj->id}}"><i class="fas fa-info"></i></a>
                                    </li>
                                    <li><a href="/shopping/add?productId={{$obj->id}}&productQuantity=1"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$obj->name}}</a></h6>
                                <h5>{{number_format($obj->price)}} $</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($qua as $obj)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix fruit">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{$obj->thumbnail}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="/productDetail/{{$obj->id}}"><i class="fas fa-info"></i></a>
                                    </li>
                                    <li><a href="/shopping/add?productId={{$obj->id}}&productQuantity=1"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$obj->name}}</a></h6>
                                <h5>{{number_format($obj->price)}} $</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>New Product</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[0] -> thumbnail}}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[0] -> name}}</h6>
                                        <span>{{number_format($newProduct[0] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[1] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[1] -> name}}</h6>
                                        <span>{{number_format($newProduct[1] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[2] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[2] -> name}}</h6>
                                        <span>{{number_format($newProduct[2] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[3] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[3] -> name}}</h6>
                                        <span>{{number_format($newProduct[3] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[4] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[4] -> name}}</h6>
                                        <span>{{number_format($newProduct[4] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[5] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[5] -> name}}</h6>
                                        <span>{{number_format($newProduct[5] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Recommend Product</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[82] -> thumbnail}}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[82] -> name}}</h6>
                                        <span>{{number_format($newProduct[82] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[23] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[23] -> name}}</h6>
                                        <span>{{number_format($newProduct[23] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[86] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[86] -> name}}</h6>
                                        <span>{{number_format($newProduct[86] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[75] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[75] -> name}}</h6>
                                        <span>{{number_format($newProduct[75] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[68] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[68] -> name}}</h6>
                                        <span>{{number_format($newProduct[68] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[8] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[8] -> name}}</h6>
                                        <span>{{number_format($newProduct[8] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Hottest product</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[83] -> thumbnail}}">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[83] -> name}}</h6>
                                        <span>{{number_format($newProduct[83] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[80] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[80] -> name}}</h6>
                                        <span>{{number_format($newProduct[80] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[79] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[79] -> name}}</h6>
                                        <span>{{number_format($newProduct[79] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[42] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[42] -> name}}</h6>
                                        <span>{{number_format($newProduct[42] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[35] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[35] -> name}}</h6>
                                        <span>{{number_format($newProduct[35] -> price)}} $</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$newProduct[24] -> thumbnail}}"
                                             alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$newProduct[24] -> name}}</h6>
                                        <span>{{number_format($newProduct[24] -> price)}} $</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="backtop">
            <i class="fa-solid fa-angle-up"></i>
        </div>
    </section>

@endsection

@section('custom-js')

@endsection
