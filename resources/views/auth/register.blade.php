@extends('layouts.authLayout')
@section('authForm')
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
        <div>
            <span>Repeat password:</span>
            <input type="password" name="password_confirmation" >
        </div>
        <button type="submit">Register</button>
    </form>
@endsection
