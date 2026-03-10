@extends('layouts.authLayout')
@section('authForm')
    <form action="{{ route('register.store') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <div>
            <span>Name or Email:</span>
            <input type="text" name="name">
        </div>

        <div>
            <span>Password:</span>
            <input type="password" name="password">
        </div>
        <div style="display: flex; flex-direction: row">
            <span>Remember me:</span>
            <input type="checkbox" name="remember">
        </div>
        <button type="submit">Log in</button>
    </form>
@endsection
