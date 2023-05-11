@extends('layouts.default')

@section('content')
    <div id="support">
        <div class="container support-header">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>

        <div class="container support-list">
            <div class="row">
                <div class="col-12">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
    </div>
@stop
