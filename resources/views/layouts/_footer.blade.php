<footer>
    <div id="footer-tools">
        <div class="footer-tools-container">
            <h2>选择金信佳业的理由</h2>
            <div class="container">
                <div class="row">
                    <div class="tool col-3">
                        <div>
                            <p><img src="/images/shouquan.png"></p>
                            <span>厂商授权</span>
                        </div>
                    </div>
                    <div class="tool col-3">
                        <div>
                            <p><img src="/images/fangan.png"></p>
                            <span>方案定制</span>
                        </div>
                    </div>
                    <div class="tool col-3">
                        <div>
                            <p><img src="/images/zhengping.png"></p>
                            <span>正品行货</span>
                        </div>
                    </div>
                    <div class="tool col-3">
                        <div>
                            <p><img src="/images/fuwu.png"></p>
                            <span>金牌服务</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="footer-container">
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="footer-menu col-lg-3">
                            <div class="title footertitle">
                                公司介绍
                                <span class="btn-toggle-x"></span>
                            </div>
                            <ul class="footer-menu-item">
                                <li><a href="/about.html"><span>公司介绍</span></a></li>
                                <li><a href="/case.html"><span>客户案例</span></a></li>
                                <li><a href="/location.html"><span>公司地址</span></a></li>
                            </ul>
                        </div>
                        <div class="footer-menu col-lg-3">
                            <div class="title">
                                产品中心
                                <span class="btn-toggle-x"></span>
                            </div>
                            @if(!empty($category))
                            <ul class="footer-menu-item">
                                @foreach($category as $cate)
                                    <li><a href="/product.html?category={{ $cate['id'] }}"><span>{{ $cate['name'] }}</span></a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
{{--                        <div class="footer-menu col-lg-3">--}}
{{--                            <div class="title">--}}
{{--                                解决方案--}}
{{--                                <span class="btn-toggle-x"></span>--}}
{{--                            </div>--}}
{{--                            <ul class="footer-menu-item">--}}
{{--                                <li><a href="/solution/cloud.html"><span>云计算解决方案</span></a></li>--}}
{{--                                <li><a href="/solution/performance.html"><span>高性能解决方案</span></a></li>--}}
{{--                                <li><a href="/solution/bigdata.html"><span>大数据解决方案</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="footer-menu col-lg-3">
                            <div class="title">
                                联系我们
                                <span class="btn-toggle-x"></span>
                            </div>
                            <ul class="footer-menu-item">
                                <li><a href="/support.html"><span>联系我们</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>© 2022 金信佳业 所有权利均予保留。</span>
                            <span style="margin-left: 30px;"><a href="#"><br></br>蜀ICP备19038118号-1</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="contact-box">
    <div class="kf">
        在线<br>客服
    </div>
{{--    <div class="contact qq">--}}
{{--        <a href="http://wpa.qq.com/msgrd?v=3&uin=89989613&site=&menu=yes">--}}
{{--            <img alt="客服小图标" src="/images/qq.png" class="img0">--}}
{{--            <img alt="客服小图标" src="/images/qq1.png" class="img1">--}}
{{--        </a>--}}
{{--    </div>--}}
    <div class="contact wechat">
        <img alt="客服小图标" src="/images/wechat.png" class="img0">
        <img alt="客服小图标" src="/images/wechat1.png" class="img1">
        <div class="tips wechat" style="background-image:url('/images/wechat.jpg')"></div>
    </div>
    <div class="contact phone">
        <img alt="客服小图标" src="/images/phone.png" class="img0">
        <img alt="客服小图标" src="/images/phone1.png" class="img1">
        <div class="tips phone">
            咨询电话：18108034533
        </div>
    </div>
</div>
