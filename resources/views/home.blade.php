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
        <section class="business">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>业务布局</h2>
                    </div>
                </div>
                <div class="row business-list">
                    <div class="col-4">
                        <div class="business-info">
                            <a href="/product?category=1">
                                <div class="business-img img1"></div>
                            </a>
                        </div>
                        <div class="business-title">
                            <h2>服务器</h2>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="business-info">
                            <a href="/product?category=1">
                                <div class="business-img img2"></div>
                            </a>
                        </div>
                        <div class="business-title">
                            <h2>工作站</h2>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="business-info">
                            <a href="/product?category=1">
                                <div class="business-img img3"></div>
                            </a>
                        </div>
                        <div class="business-title">
                            <h2>防火墙</h2>
                        </div>
                    </div>
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
        <section class="news">
            <div class="container">
                <div class="row news-he">
                    <div class="col-9">
                        <h2>新闻中心</h2>
                    </div>
                    <div class="col-3">
                        <a href="/news" class="news-more">更多></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xs-12">
                        <img src="/images/news.jpg" class="news-img">
                    </div>
                    <div class="col-lg-5 col-xs-12 news-item">
                        <div class="continaer">
                            @if(!empty($news))
                                @foreach($news as $k => $newsInfo)
                                    <div class="row news-info @if($k == 0) news-active @endif">
                                        <div class="col-3">
                                            <h2 class="news-sort">0{{ $k + 1 }}</h2>
                                        </div>
                                        <div class="col-9">
                                            <a href="/news/{{ $newsInfo['id'] }}">
                                                <div class="news-tit">{{ $newsInfo['title'] }}</div>
                                            </a>
                                            <a href="/news/{{ $newsInfo['id'] }}">
                                                <p class="news-content">{{ $newsInfo['content'] }}</p>
                                            </a>
                                            <p class="news-time">{{ $newsInfo['created_at'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
