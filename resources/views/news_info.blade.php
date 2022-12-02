@extends('layouts.default')

@section('content')
    <div id="news-show">
        <div class="container">
            <div class="row news-header">
                <div class="col-12">
                    <a href="/news"><span>返回新闻中心</span></a>
                </div>
            </div>
            @if(!empty($data))
                <div class="row news-title">
                    <div class="col-12">
                        <h1>{{$data['title']}}</h1>
                    </div>
                </div>
                <div class="row news-content">
                    <div class="col-12">
                        {!! $data['content'] !!}
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop
