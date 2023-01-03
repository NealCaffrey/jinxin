@extends('layouts.default')

@section('content')
    <div id="product-title">
        <div class="container">
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-12 col-lg-6">
                    <h1>{{ $info['name'] }}</h1>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="product-title-img">
{{--                        <img src="/uploads/{{ $info->image }}">--}}
                    </div>
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

    <div id="product-info">

        <div class="container product-content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div>
                        {!! $info->content !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="container product-attribute" style="display: none">
            @if(!empty($info->attribute))
                @foreach($info->attribute as $key => $attr)
                    @if(!empty($attr) && is_string($attr))
                        <div class="row">
                            <div class="col-6">
                                {{ $key }}
                            </div>
                            <div class="col-6">
                                {{ $attr }}
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@stop
