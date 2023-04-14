@section('title', 'Product')
@extends('client.layouts.master-1')
@section('custom-style')

    <link rel="stylesheet" href="/libs/client/css/bootstrap.min.css">

    <style>
        .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem;
        }

        .pagination {
            margin-bottom: 20px;
        }

        .pagination .page-item.page-indicator .page-link {
            padding: .65rem .8rem;
            font-size: 14px;
            border-radius: 0;
        }

        .pagination .page-item.page-indicator:hover .page-link {
            color: #454545;
        }

        .pagination .page-item .page-link {
            border-radius: 0;
            text-align: center;
            padding: 0.55rem 1rem;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.15);
            color: #454545;
            border: 1px solid #eaeaea;
        }

        .pagination .page-item .page-link:hover i, .pagination .page-item .page-link span {
            color: #fff;
        }

        .pagination .page-item .page-link:focus {
            outline: 0;
            box-shadow: none;
        }

        .pagination .page-item .page-link:hover {
            background: #593bdb;
            color: #fff;
            border-color: #593bdb;
        }

        .pagination .page-item.active .page-link {
            background-color: #593bdb;
            border-color: #593bdb;
            color: #fff;
        }

        .pagination .page-item .page-link {
            color: #454545;
        }

        .pagination .page-item:last-child .page-link {
            margin-right: 0;
        }

        [direction="rtl"] .pagination .page-item:first-child .page-link {
            margin-right: 0;
        }

        .pagination-gutter .page-item {
            margin-right: 7px;
        }

        .pagination-gutter .page-item .page-link {
            border-radius: 3px !important;
        }

        .pagination-circle .page-item {
            margin-right: 7px;
        }

        .pagination-circle .page-item .page-link, .pagination-circle .page-item.page-indicator .page-link {
            width: 40px;
            height: 40px;
            padding: 0;
            line-height: 40px;
            border-radius: 50% !important;
            padding: 0;
        }

        .pagination.pagination-md .page-item .page-link {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
        }

        .pagination.pagination-sm .page-item.page-indicator .page-link {
            font-size: 12px;
        }

        .pagination.pagination-sm .page-item .page-link {
            padding: 0;
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
        }

        .pagination.pagination-xs .page-item.page-indicator .page-link {
            font-size: 10px;
        }

        .pagination.pagination-xs .page-item .page-link {
            padding: 0;
            width: 25px;
            height: 25px;
            line-height: 25px;
            font-size: 12px;
        }

        .selectpicker {
            width: 100%;
            height: 30px;
            margin-top: 5px;
        }

        .search-product {
            height: 26px;
            /*margin-top: 25px;*/
        }

    </style>
@endsection
@section('main-content')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Product Filter</h4>
                            <ul>
                                <form action="" id="filter_form">
                                    <select class="selectpicker form-control" id="price" name="price">
                                        <option selected disabled hidden>Filter by price</option>
                                        <option value="1" {{$price && $price == 1 ? 'selected':''}}>0-20 $</option>
                                        <option value="2" {{$price && $price == 2 ? 'selected':''}}>20-50 $</option>
                                        <option value="3" {{$price && $price == 3 ? 'selected':''}}>50-100 $</option>
                                        <option value="4" {{$price && $price == 4 ? 'selected':''}}>> 100 $</option>
                                    </select>
                                    <select class="selectpicker form-control" id="category" name="category">
                                        <option selected disabled hidden>Filter by category</option>
                                        <option value="1" {{$category && $category == 1 ? 'selected':''}}>Progressive House</option>
                                        <option value="2" {{$category && $category == 2 ? 'selected':''}}>Futurebass</option>
                                        <option value="3" {{$category && $category == 3 ? 'selected':''}}>Bigroom</option>
                                    </select>
                                    <select class="selectpicker form-control" id="labelName" name="labelName">
                                        <option selected disabled hidden>Filter by label</option>
                                        <option value="1" {{$labelName && $labelName == 1 ? 'selected':''}}>Monstercat
                                        </option>
                                        <option value="2" {{$labelName && $labelName == 2 ? 'selected':''}}>Ultrasonic
                                        </option>
                                        <option value="3" {{$labelName && $labelName == 3 ? 'selected':''}}>Dharma Studio
                                        </option>
                                        <option value="4" {{$labelName && $labelName == 4 ? 'selected':''}}>Revealed

                                    </select>
                                </form>
                            </ul>
                        </div>
                        <div class="sidebar__item">
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
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <form action="">
                                    <div class="filter__option">
                                        <input class="search-product" type="text" name="search" id="search"
                                               placeholder="Enter your keyword">
                                        <button type="submit" class="btn-success">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($list as $obj)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$obj->thumbnail}}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="/productDetail/{{$obj->id}}"><i class="fas fa-info"></i></a>
                                            </li>
                                            <li><a href="/shopping/add?productId={{$obj->id}}&productQuantity=1"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{$obj->name}}</h6>
                                        <h6><a href="#">{{$obj->labelName}}</a></h6>
                                        <h5>{{number_format($obj->price)}} $</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-6">
                            @if ($list->lastPage() > 1)
                                <ul class="pagination">
                                    <li class="{{ ($list->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a href="{{ $list->url(1) }}">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $list->lastPage(); $i++)
                                        <li class="{{ ($list->currentPage() == $i) ? ' active' : '' }}">
                                            <a href="{{ $list->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' disabled' : '' }}">
                                        <a href="{{ $list->url($list->currentPage()+1) }}">Next</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#price').change(function () {
                $('#filter_form').submit()
            })
            $('#labelName').change(function () {
                $('#filter_form').submit()
            })
            $('#category').change(function () {
                $('#filter_form').submit()
            })
        })
    </script>
@endsection
