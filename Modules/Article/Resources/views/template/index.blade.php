@extends('admin::layouts.master')
@section('content')
    @component('components.tabs', ['title'=>'模板设置'])
        @slot('nav')
        @endslot
        @slot('body')
            <div class="row">
                @foreach($templates as $template)
                    <div class="card col-sm-3">
                        <div class="card-block">
                            <img src="{{$template['preview']}}" style="width: 100%;height: 180px;">
                        </div>
                        <a href="" class="btn btn-success btn-block">设为默认模板</a>
                    </div>
                @endforeach
            </div>
        @endslot
    @endcomponent
@endsection