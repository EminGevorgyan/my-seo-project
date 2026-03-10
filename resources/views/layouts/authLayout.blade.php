@extends('layouts.layout')
@section('content')
    @vite('resources/css/authForm.css')
    <div class="videoBack">
        <video autoplay loop muted playsinline poster="{{asset('logos/backg.png')}}">
            <source src="{{ asset('logos/backg.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="formAuth">
        @yield('authForm')
    </div>
    <script>
        document.querySelectorAll('video').forEach(video => {
            video.playbackRate = 0.7;
        });
    </script>
@endsection
