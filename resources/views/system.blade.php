@extends('layout.master')
@section('content')
    <form method="get" action="" name="mainForm">
        <div>
            <br />
            <div id="lm_title">
            </div>
            <p class='centered'>
            </p>
            {{-- @for ($i=0; $i < count($lm_title); $i++)
                <p class="centered" id="lm_title" name={{$lm_id[$i]}}>
                    {{$lm_title[$i]}}
                </p>
            @endfor --}}
            <br />
            <br />
        </div>
    </form>
@endsection
