@extends('layout.master')
@section('content')
    <div class="loginForm">
        <div class="form-wrapper">
            <h1 class="loginTitle">Log in</h1>
            <form method='post' action='login'>
                <div class="form-item">
                    <label for="learnerid"></label>
                    <input type="text" name="learnerid" required="required" placeholder="ID" minlength="6"></input>
                    @if (isset($message_notExist))
                        <p class="errorMes">
                            {{$message_notExist}}
                        </p>
                    @endif
                </div>
                <div class="form-item">
                    <label for="password"></label>
                    <input type="password" name="password" required minlength="8" placeholder="Password"></input>
                    @if (isset($message_pswDeny))
                        <p class="errorMes">
                            {{$message_pswDeny}}
                        </p>
                    @endif
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="button-panel">
                    <input type="submit" class="button" title="Log in" value="Log in"></input>
                </div>
            </form>
            <div class="form-footer">
                <p><a href="create">Create an account</a></p>
                <p><a href="#">Forgot password?</a></p>
            </div>
        </div>
    </div>
    @if (isset($session_id))
        <p>
            {{$session_id}}
        </p>
    @endif

@endsection
