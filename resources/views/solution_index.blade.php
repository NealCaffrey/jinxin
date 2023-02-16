@extends('layouts.default')

@section('content')
    <div id="news">
        <div class="container news-header">
            <div class="row">
                <div class="col-12">
                    <h1>解决方案</h1>
                </div>
            </div>
        </div>
        <div class="container news-list">

            @if(!empty($solutions))
                @foreach($solutions as $info)
                    <div class="row news-list-item">
                        <div class="col-12">
                            <div class="row">
{{--                                <div class="col-lg-2">{{$info['created_at']}}</div>--}}
                                <div class="col-lg-12">
                                    <a href="/solution/{{$info['id']}}.html">{{$info['name']}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@stop
