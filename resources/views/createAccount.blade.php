@extends('layout.master')
@section('content')
    <div class="CreateAccountForm">
        <div class="form-wrapper">
            <h1 class="loginTitle">Create Account</h1>
            <form method='post' action='./'>
                <div class="form-item">
                    <label for="username"></label>
                    <input type="text" name="username" required="required" placeholder="User Name"></input>
                </div>
                <div class="form-item">
                    <label for="email"></label>
                    <input type="email" name="email" required  placeholder="Email Address"></input>
                </div>
                <div class="form-item">
                    <label for="password"></label>
                    <input type="password" name="password" required minlength="8" placeholder="Password"></input>
                </div>
                <div class="button-panel">
                    <input type="submit" class="button" title="Create Account" value="Create Account"></input>
                </div>
                <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            </form>
            <div class="form-footer">
                <p><a href="#">Need Help?</a></p>
            </div>
        </div>
    </div>
@endsection
