<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    @vite(['resources/css/app.css'])
</head>
<body>
<header>
    <div class="headerLogoPart">
        <span>TEST</span>
    </div>
    <div class="headerLinksPart">
        <nav>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('dub')}}">Dub</a></li>
            <li><a href="{{route('about')}}">About</a></li>
        </nav>
    </div>
    <div class="headerUserPart">
        <div class="logoUser"><img src="{{asset('logos/male_1.svg')}}" alt=""></div>
        <div class="name">Varazdat</div>
    </div>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
