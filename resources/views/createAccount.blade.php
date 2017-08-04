@extends('layout.master')
@section('content')
    <div class="CreateAccountForm">
        <div class="form-wrapper">
            <h1 class="loginTitle">Create Account</h1>
            <form method='post' action='create'>
                <div class="form-item">
                    <label for="learnername"></label>
                    <input type="text" name="learnername" required="required" placeholder="Name"></input>
                </div>
                <div class="form-item">
                    <label for="learnerID"></label>
                    <input type="text" name="learnerid" required  placeholder="ID" minlength="6"></input>
                    @if (isset($message_dupl))
                        <p class="errorMes">
                            {{$message_dupl}}
                        </p>
                    @endif
                </div>
                <div class="form-item">
                    <label for="password"></label>
                    <input type="password" name="password" required minlength="8" placeholder="Password"></input>
                </div>
                <div class="form-item">
                    <label for="confirm"></label>
                    <input type="password" name="confirm" required minlength="8" placeholder="Confirm Password"></input>
                </div>
                @if (isset($message_notMatch))
                    <p class="errorMes">
                        {{$message_notMatch}}
                    </p>
                @endif
                <div class="button-panel">
                    <input type="submit" class="button" title="Create Account" value="Create Account"></input>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <div class="form-footer">
                <p><a href="#">Need Help?</a></p>
            </div>
        </div>
    </div>
@endsection
