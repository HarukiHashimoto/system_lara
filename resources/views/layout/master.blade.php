<!doctype html>
<html>
@include('layout.masterHead')
@include('layout.drawer')
<div class="header main">
    <header class="ui header centered">
        <h1 class="white text">{{$title}}</h1>
        <p class="gray text">
            This is {{$title}}.
        </p>
    </header>
</div>
@include('layout.loginBar')
<body>
    <div class='mainPart'>
        {{-- body部 --}}
        @section('content')
        @show
        @include('layout.masterFooter')
    </div>
