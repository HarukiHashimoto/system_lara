@section('body')
    <p>
        @for ($i=0; $i < count($learner); $i++)
            <p>
                {{$learner[$i]->name}}
            </p>
        @endfor

    </p>
@endsection
