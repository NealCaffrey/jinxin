@extends('layouts.default')

@section('content')
    <div id="home">
        <section>
            <div class="banners">
                <div class="slidershow">
                    <ul class="sliders">
                        <li class="slider" style="opacity: 1"><img src="/images/bg1.jpg" width="100%" height="100%"></li>
                        <li class="slider" style="opacity: 0"><img src="/images/bg2.jpg" width="100%" height="100%"></li>
                        <li class="slider" style="opacity: 0"><img src="/images/bg3.jpg" width="100%" height="100%"></li>
                        <li class="slider" style="opacity: 0"><img src="/images/bg4.jpg" width="100%" height="100%"></li>
                    </ul>
                    <ol class="flex-control-nav">
                        <li class="banner-icon flex-active"><a href="#">1</a></li>
                        <li class="banner-icon"><a href="#">2</a></li>
                        <li class="banner-icon"><a href="#">3</a></li>
                        <li class="banner-icon"><a href="#">4</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <section>
            <div class="small">
                <div class="row">
                    <div class="pure col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="index_sb bg1">
                            <div class="caption">
                                <div class="caption-title">数据存储</div>
                                <p class="caption-desc">集中备份服务器、虚拟机、电脑，无需额外费用</p>
                            </div>
                        </a>
                    </div>
                    <div class="pure col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="index_sb bg2">
                            <div class="caption">
                                <div class="caption-title">群晖一体机</div>
                                <p class="caption-desc">集中备份服务器、虚拟机、电脑，无需额外费用</p>
                            </div>
                        </a>
                    </div>
                    <div class="pure col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="index_sb bg3">
                            <div class="caption">
                                <div class="caption-title">群晖一体机</div>
                                <p class="caption-desc">集中备份服务器、虚拟机、电脑，无需额外费用</p>
                            </div>
                        </a>
                    </div>
                    <div class="pure col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="index_sb bg4">
                            <div class="caption">
                                <div class="caption-title">群晖一体机</div>
                                <p class="caption-desc">集中备份服务器、虚拟机、电脑，无需额外费用</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
