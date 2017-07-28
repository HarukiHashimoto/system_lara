@extends('layout.master')
@section('content')
    <div>
        <br />
        <div id="lm_title">

        </div>
        <p class='centered'>
        <button type='submit' name='action' value='action' class='ui primary button' id='fetch'>教材選択</button>
        </p>
        {{-- @for ($i=0; $i < count($lm_title); $i++)
            <p class="centered" id="lm_title" name={{$lm_id[$i]}}>
                {{$lm_title[$i]}}
            </p>
        @endfor --}}
        <br />
        <br />
    </div>
@endsection
