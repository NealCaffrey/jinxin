@extends('layouts.default')

@section('content')
    <div id="news">
        <div class="container news-header">
            <div class="row">
                <div class="col-12">
                    <h1>新闻中心</h1>
                </div>
            </div>
        </div>
        <div class="container news-list">

            @if(!empty($data))
                @foreach($data as $info)
                    <div class="row news-list-item">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-2">{{$info['created_at']}}</div>
                                <div class="col-lg-10">
                                    <a href="/news/{{$info['id']}}.html">{{$info['title']}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@stop
