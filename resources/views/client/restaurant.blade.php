@extends('layout.master',['page_title'=>'Chi tiết nhà hàng'])
@section('css')
    <link rel="stylesheet" href="{{asset('css/restaurantClient.css')}}">
@endsection
@section('content')
    <!-- Product - New Arrivals -->
    <div class="home-1">
        <div class="container container-edit">
            <!-- Intro -->
            <div class="section intro">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="intro-header">
                                <h3>Chào mừng tới {{$restaurant->name}}</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-left">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-1.png" alt="Intro Image"></p>
                                    <h4>Về nhà hàng</h4>
                                    <p>{{$restaurant->shortDescription}}</p>
                                    <p>{{$restaurant->description}}</p>
                                </div>
                            </div>
                            <div class="intro-left">
                                <div class="intro-item">
                                    <div class="btn btn-danger"><a href="/foody/dat-cho/{{'?id='.$restaurant->id}}"
                                                                   style="vertical-align: middle;font-weight: 700;font-size: 20px;cursor: pointer;color: #f37934;">
                                            Đặt bàn</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="effect">
                                <a href="#">
                                    <img class="img-responsive" src="/images/restaurant/{{$restaurant->avartar}}"
                                         alt="Intro Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-2.png" alt="Intro Image"></p>
                                    <h4>Liên hệ</h4>
                                    <p>Số điện thoại: {{$restaurant->phone}}</p>
                                    <div>
                                        <a href="#" class="food-address1">{{$restaurant->addressDetail}},</a>
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->wardName}}</span></a>,
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->districtName}}</span></a>,
                                        <a class="food-address1"
                                           href="#"><span>{{$address[0]->provindName}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-right">
                                <div class="intro-item">
                                    <p><img src="/images/foody/intro-icon-2.png" alt="Intro Image"></p>
                                    <h4>Thời gian hoạt động</h4>
                                    <span style="color: #4cae4c">Giờ mở cửa: {{$restaurant->openTime}}</span><br>
                                    <span style="color: #d33">Giờ đóng cửa: {{$restaurant->closeTime}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product - New Arrivals -->


            <div class="section products-block new-arrivals layout-3">
                <div class="block-title">
                    <h2 class="title">Thực đơn <span>Nhà hàng</span></h2>
                </div>
                <div class="block-content">
                    <div class="container">
                        <div class="products owl-theme owl-carousel">
                            @foreach($chunk_list as $chunk_lists)
                                <div class="item">
                                    @foreach($chunk_lists as $item)
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->id}}">
                                                    <img src="/images/food/{{$item->avatar}}"
                                                         style="display: block; height: 80px" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-info">
                                                <div class="product-title">
                                                    <a href="/foody/chi-tiet-mon-an/{{'?id='.$item->id}}">
                                                        {{$item->name}}
                                                    </a>
                                                </div>
                                                <div class="product-price">
                                                    @if($item->discount==0)
                                                        <span class="sale-price">{{number_format($item->price)}}
                                                            vnd</span>
                                                    @else
                                                        <span class="sale-price">{{number_format($item->discount)}}
                                                            vnd</span>
                                                        <span class="base-price">{{number_format($item->price)}}
                                                            vnd</span>
                                                    @endif
                                                </div>

                                                <div class="product-rating">
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star on "></div>
                                                    <div class="star on"></div>
                                                    <div class="star"></div>
                                                </div>

                                                <div class="product-buttons">
                                                    <button class="btn-card" id="add-cart-{{$item->id}}">
                                                        Đặt món
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="fb-comments"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    {{--@if(Auth::check())--}}
                    {{--@if($rate != null)--}}
                    {{--<div class="stars stars-example-bootstrap">--}}
                    {{--<form action="/foody/danh-gia" method="post">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<label>Đánh giá của bạn</label>--}}
                    {{--<select id="example-bootstrap" name="rating" autocomplete="off">--}}
                    {{--<option value="1">1</option>--}}
                    {{--<option value="2">2</option>--}}
                    {{--<option value="3">3</option>--}}
                    {{--<option value="4">4</option>--}}
                    {{--<option value="5">5</option>--}}
                    {{--</select>--}}
                    {{--<input type="hidden" name="restaurantID" value="{{$selected_restaurantId}}">--}}
                    {{--<input type="submit" value="Gửi đánh giá">--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=1930127023739706&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection