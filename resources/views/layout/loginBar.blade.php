<div><p class="space">Hi! Welcom to my page!</p></div>
<div class="loginBar ui right aligned grid">
    <div class="eight wide column"></div>
    <div class="six wide right floated column">

        @if ($cookie_id != 'NULL')
            <form method='post' action='logout'>
                {{$cookie_id}}さんとしてログイン中
                <button class="ui compact labeled icon button">
                    <i class="icon sign out"></i>
                    Logout
                </button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
        @else
            <a href="login">
                <button class="ui compact labeled icon button">
                    <i class="icon sign in"></i>
                    Login
                </button>
            </a>

        @endif
    </div>
    <div class="two wide right floated"></div>
</div>
