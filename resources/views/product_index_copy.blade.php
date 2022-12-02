@extends('layouts.default')

@section('content')
    <div id="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="product-header">产品</h1>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
            </div>

            <div class="row">
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 product-list">

                    @if(!empty($list))
                        @foreach($list as $info)
                            <div class="product-box">
                                <div class="img">
                                    <a href="/product/{{ $info->id }}">
                                        <img src="/uploads/{{ $info->image }}">
                                    </a>
                                </div>
                                <div class="intro">
                                    <a href="/product/{{ $info->id }}">
                                        <h4>{{ $info->name }}</h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
@stop
