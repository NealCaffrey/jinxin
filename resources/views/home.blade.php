@extends('layouts.default')

@section('content')
    <div id="home">
        <section>
            <div class="banners">
                <div class="slidershow">
                    <ul class="sliders">
                        @if(!empty($slides))
                            @foreach($slides as $k => $slide)
                                @if($k == 0)
                                    <li class="slider" style="opacity: 1;background-image: url('/uploads/{{ $slide['image'] }}')"></li>
                                @else
                                    <li class="slider" style="opacity: 0;background-image: url('/uploads/{{ $slide['image'] }}')"></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                    <ol class="flex-control-nav">
                        @if(!empty($slides))
                            @foreach($slides as $k => $slide)
                                @if($k == 0)
                                    <li class="banner-icon flex-active"><a href="#"></a></li>
                                @else
                                    <li class="banner-icon"><a href="#"></a></li>
                                @endif
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </section>
        <section class="brand">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>产品品牌</h2>
                    </div>
                </div>
                <div class="row brand-list">
                    @if(!empty($brands))
                        @foreach($brands as $brand)
                            <div class="col-6 col-sm-3 col-lg-3 brand-info">
                                <a href="/product?brand={{ $brand['id'] }}">
                                    <img src="/uploads/{{ $brand['image'] }}">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </div>
@stop
