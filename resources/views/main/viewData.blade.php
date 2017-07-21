@section('content')
    <form method="post" action='./'>
        <input type="submit" name="aaa" value="送信">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}">
    </form>
@endsection
