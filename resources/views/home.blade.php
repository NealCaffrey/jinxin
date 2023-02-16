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
                                    <li class="slider" data-url="{{ $slide['url'] }}" style="background-image: url('/uploads/{{ $slide['image'] }}')"></li>
                                @else
                                    <li class="slider" data-url="{{ $slide['url'] }}" style="display: none;background-image: url('/uploads/{{ $slide['image'] }}')"></li>
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
{{--                    <div class="col-4">--}}
{{--                        <div class="business-info">--}}
{{--                            <a href="/product.html?category=1">--}}
{{--                                <div class="business-img img1"></div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="business-title">--}}
{{--                            <h2>服务器</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                    @if(!empty($business))
                        @foreach($business as $k => $busin)
                            <div class="col-4">
                                <div class="business-info">
                                    <a href="{{ $busin['url'] }}">
                                        <div class="business-img">
                                            <img src="/uploads/{{ $busin['image'] }}">
                                        </div>
                                    </a>
                                </div>
                                <div class="business-title">
                                    <h2>{{ $busin['name'] }}</h2>
                                </div>
                            </div>
                        @endforeach
                    @endif

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
                                <a href="/product.html?brand={{ $brand['id'] }}">
                                    <img src="/uploads/{{ $brand['image'] }}">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="server">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>技术服务</h2>
                    </div>
                </div>
                <div class="row server-list">
                    <div class="col-12 col-sm-4">
                        <div class="server-info">
                            <img src="/images/yunwei.png">
                            <h3>IT运维/外包</h3>
                            <span>研究表明，IT外包服务服务效率更高，成本更低，升级更容易。IT外包服务是企业迅速发展企业数字化，提高数字化质量、提高企业工作效率，节约信息化成本的一种途径，也为个人用户提供巨大的帮助。</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="server-info">
                            <img src="/images/app.png">
                            <h3>APP开发</h3>
                            <span>移动互联网时代是全民的移动互联网时代，是每个人的时代，也是每个企业的时代。APP便捷了每个人的生活，APP开发让每个企业都开始了移动信息化进程。</span>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="server-info">
                            <img src="/images/zuli.png">
                            <h3>设备租赁</h3>
                            <span>IT设备购买成本高昂，对于初创公司来说租赁IT设备是一个更好的选择。通过租赁的方式可以有效减少资金占用和减轻资金负债状况。加快设备更新、避免技术落后的同时，降低投资风险</span>
                        </div>
                    </div>
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
                        <a href="/news.html" class="news-more">更多></a>
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
                                            <a href="/news/{{ $newsInfo['id'] }}.html">
                                                <div class="news-tit">{{ $newsInfo['title'] }}</div>
                                            </a>
                                            <a href="/news/{{ $newsInfo['id'] }}.html">
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
