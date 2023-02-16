@extends('layouts.default')

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
                            <div class="col-12">
                                <h3>重点参数</h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($info->attribute as $key => $attr)
                                @if(!empty($attr) && is_string($attr))
                                    <div class="col-6">
                                        {{ $key }} ： {{ $attr }}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="row slide">
                @if(!empty($info->slide))
                    @foreach($info->slide as $key => $data)
                        <div class="col-2">
                            <a href="/uploads/{{ $data }}">
                                <img src="/uploads/{{ $data }}">
                            </a>
                        </div>
                    @endforeach
                @endif
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

    <div id="product-info">

        <div class="container product-content">
            <div class="row">
                <div class="col-12">
                    <div>
                        {!! $info->content !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="container product-attribute" style="display: none">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div>
                        {!! $info->spec !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
