@extends('layouts.default')

@section('content')
    <div id="case">
        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>客户案例</h1>
                        <p>帮助各行各业应对市场挑战，了解这些组织的看法。</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="case-list">
            <div class="container">
                <div class="row">
                    @if(!empty($data))
                        @foreach($data as $info)
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="#">
                                    <div class="logo">
                                        <img src="/uploads/{{$info['image']}}">
                                    </div>
                                    <div class="says">{{$info['title']}}</div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </div>
@stop
