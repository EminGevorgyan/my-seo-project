@extends('layouts.layout')
@section('content')
    @vite('resources/css/auth/register.css')

    <div class="videoBack">
        <video autoplay loop muted playsinline poster="{{asset('logos/backg.png')}}">
            <source src="{{ asset('logos/backg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="registerForm">
        <form action="{{ route('register.store') }}" method="POST">
            <h1>Register</h1>
            @csrf
            <div>
                <span>Name:</span>
                <input type="text" name="name" >
            </div>
            <div>
                <span>Email:</span>
                <input type="text" name="email" >
            </div>
            <div>
                <span>Password:</span>
                <input type="password" name="password" >
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection
