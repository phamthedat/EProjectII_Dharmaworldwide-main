    @section('title', 'Order Details')
@extends('admin.layouts.master')
@section('custom-style')
    <link rel="stylesheet" href="/libs/client/css/bootstrap.min.css">

@endsection
@section('main-content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class=" mb-3">
                    <h4><strong>My order #{{$news->id}}</strong></h4>
                    <div class="mb-5">
                        <div>Status :
                            @switch($news->status)
                                @case(-1)
                                Cancel
                                @case(1)
                                    Wait for confirmation
                                @break
                                @case(2)
                                    confirmed
                                @break
                                @case(3)
                                Delivery
                                @break
                                @case(4)
                                Complete
                                @break
                            @endswitch
                        </div>
                        <div>
                            Send to Mr(Mrs) : {{$news->shipName}}</div>
                        <div>Phone : {{$news->shipPhone}}</div>
                        <div>Address : {{$news->shipAddress}}</div>
                        <div>Note : {{$news->note}}</div>
                    </div>
                    <?php
                    $totalPrice = 0
                    ?>
                    <table class="mb-0 table table-bordered">
                        <thead>
                        <tr class="text-center">
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news->orderDetails as $orderDetail)
                            <?php
                            if (!empty($orderDetail)) {
                                $totalPrice += $orderDetail->unitPrice * $orderDetail->quantity;
                            }
                            ?>
                            <tr class="text-center">
                                <td style="width: 500px">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{explode(',',$orderDetail->product->thumbnail)[0]}}" alt=""
                                                 width="60px" height="50px">
                                        </div>
                                        <div class="col-9">
                                            <h6>{{$orderDetail->product->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{number_format($orderDetail->product->price)}} đ</td>
                                <td>{{$orderDetail->quantity}}</td>
                                <td>{{number_format($orderDetail->unitPrice*$orderDetail->quantity)}} đ</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4"><strong>Total order: {{number_format($totalPrice)}} đ</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
@section('custom-js')

@endsection
