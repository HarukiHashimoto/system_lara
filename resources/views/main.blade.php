@extends('layout.master')
@section('content')
    <div class="ui items grid">
        <div class="three wide column"></div>
        <div class="item ten wide column">
            <div class="content">
                <a class="header">{{$lm_title}}</a>
                <div class="description">
                    <p class='show_text'>
                        {{ $lm_text }}
                    </p>
                </div>
            </div>
        </div>
        <div class="three wide column"></div>
    </div>
@include('main.build')
@endsection
