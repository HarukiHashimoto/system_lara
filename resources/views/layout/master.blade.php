<!doctype html>
<html>
@include('layout.masterHead')
@include('layout.drawer')
<div class="header">
    <header class="ui header centered">
        <h1 class="white text">Sample Page</h1>
        <p class="gray text">
            Welcome to Sample Page!
        </p>
    </header>
</div>

<body>
    {{-- body部 --}}
    @section('body')
    @show
    <div>
        @include('layout.masterFooter')
