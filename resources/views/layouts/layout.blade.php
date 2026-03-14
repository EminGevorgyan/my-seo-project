<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? 'Laravel'}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    @vite(['resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body
    style="background-image: url('{{ asset('logos/backg.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
<header>
{{--    <div class="headerLogoPart">--}}
{{--        <span>TEST</span>--}}
{{--    </div>--}}
    <div class="headerLinksPart">
        <nav>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('dub')}}">Dub</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('users')}}">Users</a></li>
        </nav>
    </div>
    <div class="headerUserPart">
        <x-loginPart></x-loginPart>
{{--        @include('components.loginPart')--}}
    </div>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
