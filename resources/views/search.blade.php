@extends('layouts.default')

@section('content')
    <div id="search">
        <div class="container search-box">
            <div class="row">
                <div class="col-12">
                    <h1>搜索结果</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div id="search-container">
                        <form id="search-form" action="/search.html">
                            <label for="search-keyword">
                                <input id="search-keyword" name="keyword" type="text" placeholder="搜索" value="{{ $keyword }}">
                            </label>
                            <a id="search-result-submit" class="icon-pos-search">
                                <span class="icon-search"></span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container search-list">
            @if(!empty($data))
                @foreach($data as $info)
                    <div class="row">
                        <div class="col-12">
                            <div class="article">
                                <a href="{{ $info['url'] }}">
                                    <h4>{{ $info['title'] }}</h4>
                                </a>
                                <p></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif(!empty($keyword))
                <div class="row">
                    <div class="col-12">
                        <div class="search-result-null">
                            <h2>没有与您的搜索匹配的内容。</h2>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop
