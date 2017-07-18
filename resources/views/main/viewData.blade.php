@section('content')
    <p>
        @for ($i=0; $i < count($learner); $i++)
            <p>
                {{$learner[$i]->name}}
            </p>
        @endfor

    </p>
    <form method="post" action='./'>
        <input type="submit" name="aaa" value="送信">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}">
    </form>
@endsection
