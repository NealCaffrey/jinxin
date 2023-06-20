@extends('layouts.default')


@section('js')
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <script src="/js/jquery.magnific-popup.js"></script>
@stop

@section('content')
    <div id="product-title">
        <div class="container">

            <div class="row" style="padding-bottom: 20px;">
                <div class="col-12">
                    <h2>{{ $info['name'] }}</h2>
                </div>
            </div>

            <div class="row" style="padding-bottom: 20px;">
                <div class="col-12 col-md-5 product-image">
                    <img src="/uploads/{{ $info['image'] }}">
                </div>
                <div class="col-12 col-md-7">
                    @if(!empty($info->attribute))
                        <div class="row param">
                            @foreach($info->attribute as $key => $attr)
                                @if(isset($attribute[$key]))
                                    <div class="col-6">
                                        <span style="display: inline-block;width: 75px;text-align-last: justify">{{ $attribute[$key] }}</span>
                                        <span>：{{ $attr }}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="row slide">
                <div class="col-12 col-md-5 popup-gallery">
                    @if(!empty($info->slide))
                        @foreach($info->slide as $key => $data)
                            <a rel="noopener noreferrer" href="/uploads/{{ $data }}">
                                <img src="/uploads/{{ $data }}" class="slide-img">
                            </a>
                        @endforeach
                    @endif
                </div>
                <div class="col-12 col-md-7">
                    <div class="product-price-box">促销价：<span class="product-price">{{ $info->price }}</span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="choose">
                        <ul>
                            <li class="choose-item active">
                                <a href="#" data-attr="product-content">详情</a>
                            </li>
                            <li class="choose-item">
                                <a href="#" data-attr="product-attribute">规格</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-2 d-none d-xl-block" id="product-recommend">
                @if(!empty($recommend))
                    <div style="border: 1px solid #f0f0f0">
                        <div class="recommend-title">
                            <span>热门推荐</span>
                        </div>
                        @foreach($recommend as $v)
                            <div class="recommend-box">
                                <a href="/product/{{ $v->id }}.html">
                                    <div>
                                        <img src="/uploads/{{ $v->image }}">
                                    </div>
                                    <span>{{ $v->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-12 col-xl-10" id="product-info">
                <div class="product-content">
                    {!! $info->content !!}
                </div>
                <div class="product-attribute" style="display: none">
                    {!! $info->spec !!}
                </div>
            </div>

            <div class="col-12 col-xl-2" id="product-recommend">
                @if($contact)
                    <div style="border: 1px solid #f0f0f0;margin-bottom: 30px;">
                        <div class="recommend-title">
                            <span>联系我们</span>
                        </div>
                        <div class="recommend-box">
                            @if(!empty($info->phone))
                                <div class="product-contact"><img src="/images/phone1.png">{{$info->phone}}</div>
                            @endif
                            @if(!empty($info->qq))
                                <div class="product-contact"><img src="/images/qq1.png">{{$info->qq}}</div>
                            @endif
                            @if(!empty($info->wechat))
                                <div class="product-contact"><img src="/images/wechat1.png">{{$info->wechat}}</div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop


@section('script')
    <script>
        $(function(){
            $('.popup-gallery').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
                // other options
            });
        });
    </script>
@stop
