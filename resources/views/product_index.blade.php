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
{{--                            style="display: none"--}}
                            <div class="options">
                                @if(!empty($categoryList))
                                    @foreach($categoryList as $cate)
                                        <label class="checkbox">
                                            <input type="radio" name="category_id" style="display: none"  value="{{ $cate->id }}" @if(in_array($cate->id, $categoryId)) checked="true" @endif>
                                            <span class="checkbox-icon @if(in_array($cate->id, $categoryId)) checkbox-icon-active @endif"></span>
                                            <span class="align-fix">{{ $cate->name }}</span>
                                        </label>
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
                                            <input type="radio" name="brand_id" style="display: none" value="{{ $br->id }}" @if(in_array($br->id, $brandId)) checked="true" @endif>
                                            <span class="checkbox-icon @if(in_array($br->id, $brandId)) checkbox-icon-active @endif"></span>
                                            <span class="align-fix">{{ $br->name }}</span>
                                        </label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="container">
                        <div class="row">
                            @if(!$list->isEmpty())
                                @foreach($list as $info)
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 product-list">
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
