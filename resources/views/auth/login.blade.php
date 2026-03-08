@extends('layouts.layout')
@section('content')
    @vite('resources/css/auth/login.css')

    <div class="videoBack">
        <video autoplay loop muted playsinline poster="{{asset('logos/backg.png')}}">
            <source src="{{ asset('logos/backg.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="loginForm">
        <form action="{{ route('register.store') }}" method="POST">
            <h1>Login</h1>
            @csrf
            <div>
                <span>Name or Email:</span>
                <input type="text" name="name" >
            </div>

            <div>
                <span>Password:</span>
                <input type="password" name="password" >
            </div>
            <button type="submit">Log in</button>
        </form>
    </div>
@endsection
