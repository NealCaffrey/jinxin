@extends('layouts.default')

@section('content')
    <div id="case-show">
        <section id="case-show-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="/case.html"><span>客户案例</span></a>
                        <h1>{{$data['title']}}</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="case-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {{$data['content']}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
