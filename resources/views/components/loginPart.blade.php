<div class="authBlock">
    @auth
        <div  x-data="{open: false}" >
            <div class="userDate"  @click="open = !open">
                <div class="logoUser"><img src="{{asset('logos/male_1.svg')}}" alt=""></div>
                <div class="nameUser">{{auth()->user()->name}}</div>

            </div>
            <div class="dropDownMenu" x-show="open">
                <a href="{{route('home', auth()->user()->id)}}">Profile</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
                <form action="{{ route('users.destroy', auth()->user()->id) }}" method="POST">
                    @csrf
                    <button type="submit" style="color: red; cursor: pointer;">
                        Delete Account
                    </button>
                </form>
            </div>
        </div>

    @endauth
    @guest
        <div class="butsLR">
            <a href="{{route('login')}}"><strong>Log in </strong> </a>
            /
            <a href="{{route('register')}}"><strong> Register</strong></a>

        </div>
    @endguest
</div>
