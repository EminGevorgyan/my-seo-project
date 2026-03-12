@extends('layouts.authLayout')
@section('authForm')
    <form action="{{ route('login.store') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <div>
            <span>Name or Email: <span class="errorValid">@error('login') {{$message}} @enderror</span></span>
            <input type="text" name="login">
        </div>

        <div>
                <span>Password: <span class="errorValid">@error('password') {{$message}} @enderror</span></span>
                <input type="password" name="password">
        </div>
        <div style="display: flex; flex-direction: row">
            <span>Remember me:</span>
            <input type="checkbox" name="remember">
        </div>
        <button type="submit">Log in</button>
    </form>
{{--                @error('password')$message@enderror--}}
@endsection
