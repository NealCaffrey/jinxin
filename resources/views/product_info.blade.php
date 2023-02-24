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
                                @if(!empty($attr) && is_string($attr))
                                    <div class="col-6">
                                        {{ $key }}：{{ $attr }}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="row slide">
                <div class="col-12 popup-gallery">
                    @if(!empty($info->slide))
                        @foreach($info->slide as $key => $data)
                            <a rel="noopener noreferrer" href="/uploads/{{ $data }}">
                                <img src="/uploads/{{ $data }}" class="slide-img">
                            </a>
                        @endforeach
                    @endif
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
