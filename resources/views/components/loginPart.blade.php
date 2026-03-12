<div class="authBlock">
    @auth
        <div class="logoUser"><img src="{{asset('logos/male_1.svg')}}" alt=""></div>
        <div class="nameUser">{{auth()->user()->name}}</div>
    @endauth
    @guest
        <a href="{{route('login')}}"><strong>Log in </strong> </a>
        /
        <a href="{{route('register')}}"><strong> Register</strong></a>
    @endguest
</div>
