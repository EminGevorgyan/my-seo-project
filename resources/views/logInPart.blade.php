<div class="authBlock">
    @auth
        <div>
            <div class="logoUser"><img src="{{asset('logos/male_1.svg')}}" alt=""></div>
            <div class="nameUser">{{$user->name}}</div>
        </div>
{{--        <a href="{{route('profile')}}">Profile</a>--}}
{{--        <a href="{{route('logout')}}">Log out</a>--}}
    @endauth
    @guest
        <a href="{{route('login')}}">Log in</a>
        /
        <a href="{{route('register')}}">Register</a>
    @endguest
</div>
