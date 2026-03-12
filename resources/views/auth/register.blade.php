@extends('layouts.authLayout')
@section('authForm')
    <form action="{{ route('register.store') }}" method="POST">
        <h1>Register</h1>
        @csrf
        <div>
            <span>Name: <span class="errorValid">@error('name') {{$message}} @enderror</span></span>
            <input type="text" name="name" >
        </div>
        <div>
            <span>Email: <span class="errorValid">@error('email') {{$message}} @enderror</span></span>
            <input type="text" name="email" >
        </div>
        <div>
            <span>Password: <span class="errorValid">@error('password') {{$message}} @enderror</span></span>
            <input type="password" name="password" >
        </div>
        <div>
            <span>Repeat password: <span class="errorValid"> @error('password') {{$message}} @enderror</span></span>
            <input type="password" name="password_confirmation" >
        </div>
        <button type="submit">Register</button>
    </form>
@endsection
