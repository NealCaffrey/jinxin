<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="author" content="金信佳业">
    <meta name="description" content="金信佳业">
    <meta name="keyword" content="金信佳业、服务器、网络存储">
    <title>金信佳业</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('layouts._header')

    <main id="main">
        @yield('content')
    </main>

    @include('layouts._footer')
</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(function () {
        //菜单选中样式
        $('.sh-nav-link').mouseover(function () {
            $(this).addClass('sh-nav-link-active');
            $(this).children('.sh-nav-link-wrapper').show();
        });
        $('.sh-nav-link').mouseout(function () {
            $(this).removeClass('sh-nav-link-active');
            $(this).children('.sh-nav-link-wrapper').hide();
        });
        // //二级菜单点击样式
        // $('.sh-menu-nav-item').click(function () {
        //     $(this).siblings().removeClass('sh-menu-nav-item-active');
        //     $(this).addClass('sh-menu-nav-item-active');
        //
        //     $(this).parent().parent().children('.sh-menu-container').hide();
        //     $(this).parent().parent().children('.sh-menu-container').eq($(this).index()).show();
        // });
        //菜单切换
        $('.sh-nav-toggle-menu').click(function () {
            $(this).toggleClass('sh-nav-toggle-menu-active');
            $(this).next().toggleClass('sh-nav-mob-active');
            $('.sh-menu-mob-secondary').removeClass('sh-menu-mob-secondary-active');
        });
        //二级菜单
        $('.sh-menu-mob-d1').click(function () {
            $(this).parent().parent().children('.sh-menu-mob-secondary').eq($(this).index()).toggleClass('sh-menu-mob-secondary-active');
        });
        //返回
        $('.sh-menu-mob-secondary-back').click(function () {
            $('.sh-menu-mob-secondary').removeClass('sh-menu-mob-secondary-active');
        });
        //搜索
        $('#search-button').click(function () {
            window.location.href = "http://jinxin.test/search?keyword=" + $('#header-search-input').val();
        });
        $('#search-submit').submit(function () {
            window.location.href = "http://jinxin.test/search?keyword=" + $('#header-search-input').val();
        });
        $('#search-submit-sm').submit(function () {
            window.location.href = "http://jinxin.test/search?keyword=" + $('#header-search-input-sm').val();
        });
        //搜索结果
        $('#search-result-submit').click(function () {
            window.location.href = "http://jinxin.test/search?keyword=" + $('#search-keyword').val();
        });
        //产品筛选
        $('.btn-collapse').click(function () {
            $(this).parent().toggleClass('group-active');
            $(this).next().toggle();
        });
        $('.checkbox-icon').on('click', function () {
            $(this).toggleClass('checkbox-icon-active');
            if ($(this).prev().prop("checked")) {
                $(this).prev().prop("checked", true)
            } else {
                $(this).prev().prop("checked", false)
            }


            setTimeout(function () {
                //先行遍历值
                var category = [];
                var brand = [];
                $('.options input[name="category_id"]:checked').each(function (index, item) {
                    category.push($(item).val());
                });
                $('input[name="brand_id"]:checked').each(function (index, item) {
                    brand.push($(this).val());
                });
                window.location.href = '/product?category=' + category.join(',') + '&brand=' + brand.join(',');
            }, 100);
        });
        $('#filter-product').click(function () {
            //先行遍历值
            var category = [];
            var brand = [];
            $('.options input[name="category_id"]:checked').each(function (index, item) {
                category.push($(item).val());
            });
            $('input[name="brand_id"]:checked').each(function (index, item) {
                brand.push($(this).val());
            });
            window.location.href = '/product?category=' + category.join(',') + '&brand=' + brand.join(',');
        });
        $('.footer-menu').click(function () {
            $(this).children('.title').children('.btn-toggle-x').toggleClass('rotate');
            $(this).children('.footer-menu-item').toggle();
        });
        //产品详情
        $('.choose-item').click(function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            $('#product-info').children('.container').hide();
            $('#product-info').children('.container').eq($(this).index()).show();
        });
        $('.banner-icon').click(function () {
            $(this).siblings().removeClass('flex-active');
            $(this).addClass('flex-active');

            $('.sliders').children('.slider').css('opacity', 0);
            $('.sliders').children('.slider').eq($(this).index()).css('opacity', 1);
        });
        $('.news-info').hover(function () {
            $(this).siblings().removeClass('news-active');
            $(this).addClass('news-active');
        });
    });
</script>
</html>
