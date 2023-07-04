@extends('layouts.default')

@section('content')
    <div id="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="product-header">产品</h1>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-12">
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-lg-2" style="padding-bottom: 20px;">
                    <div class="product-filter-title">
                        <div class="filter-reset">
                            <span id="filter-product">搜索</span>
                        </div>
                    </div>
                    <div class="product-filter-group">
                        <div class="group group-active">
                            <h3 class="btn-collapse">
                                <span class="flex1">所属分类</span>
                                <span class="btn-toggle"></span>
                            </h3>
                            <div class="options">
                                @if(!empty($categoryList))
                                    @foreach($categoryList as $cate)
                                        <label class="checkbox">
{{--                                            <input type="radio" name="category_id" style="display: none"  value="{{ $cate['id'] }}" @if(in_array($cate['id'], $categoryIds)) checked="true" @endif>--}}
{{--                                            <span class="checkbox-icon @if(in_array($cate['id'], $categoryIds)) checkbox-icon-active @endif"></span>--}}
                                            <span class="align-fix">{{ $cate['name'] }}</span>
                                        </label>
                                        @if(!empty($cate['son']))
                                            @foreach($cate['son'] as $son)
                                                <label class="checkbox" style="margin-left: 20px;">
                                                    <input type="radio" name="category_id" style="display: none"  value="{{ $son['id'] }}" @if(in_array($son['id'], $categoryIds)) checked="true" @endif>
                                                    <span class="checkbox-icon @if(in_array($son['id'], $categoryIds)) checkbox-icon-active @endif"></span>
                                                    <span class="align-fix">{{ $son['name'] }}</span>
                                                </label>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="group group-active">
                            <h3 class="btn-collapse">
                                <span class="flex1">品牌</span>
                                <span class="btn-toggle"></span>
                            </h3>
                            <div class="options">
                                @if(!empty($brand))
                                    @foreach($brand as $br)
                                        <label class="checkbox">
                                            <input type="radio" name="brand_id" style="display: none" value="{{ $br['id'] }}" @if(in_array($br['id'], $brandIds)) checked="true" @endif>
                                            <span class="checkbox-icon @if(in_array($br['id'], $brandIds)) checkbox-icon-active @endif"></span>
                                            <span class="align-fix">{{ $br['name'] }}</span>
                                        </label>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        @if(!empty($appearances))
                            <div class="group group-active">
                                <h3 class="btn-collapse">
                                    <span class="flex1">外观</span>
                                    <span class="btn-toggle"></span>
                                </h3>
                                <div class="options">
                                    @foreach($appearances as $appearance)
                                        <label class="checkbox">
                                            <input type="radio" name="appearance_id" style="display: none" value="{{ $appearance['id'] }}" @if(in_array($appearance['id'], $appearanceIds)) checked="true" @endif>
                                            <span class="checkbox-icon @if(in_array($appearance['id'], $appearanceIds)) checkbox-icon-active @endif"></span>
                                            <span class="align-fix">{{ $appearance['name'] }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="container">
                        <div class="row">
                            @if(!$list->isEmpty())
                                @foreach($list as $info)
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 product-list">
                                        <div class="product-box">
                                            <div class="img">
                                                <a href="/product/{{ $info->id }}.html">
                                                    <img src="/uploads/{{ $info->image }}">
                                                </a>
                                            </div>
                                            <div class="intro">
                                                <a href="/product/{{ $info->id }}.html">
                                                    <h4>{{ $info->name }}</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    <div>
                                        {{ $list->appends(['category' => $params['category'] ?? '', 'brand' => $params['brand'] ?? '', 'appearance' => $params['appearance'] ?? ''])->links() }}
                                    </div>
                            @else
                                <div class="col-12">
                                    <div style="text-align: center;padding-top: 100px;">
                                        <h2>没有匹配的结果</h2>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
