<header class="header-section">
    <div class="logo">
        <a href="{{route('welcome')}}"><img style="width:100px;" src="{{asset('storage/'.$header->logo)}}" alt=""></a>
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Request::route()->getName()=='welcome'?'active':''}}"><a href="{{route('welcome')}}">Home</a>
            </li>
            <li class="{{Request::route()->getName()=='services'?'active':''}}"><a
                    href="{{route('servicesNav')}}">Services</a></li>
            <li class="{{Request::route()->getName()=='blog'?'active':''}}"><a href="{{route('blog')}}">Blog</a></li>
            <li class="{{Request::route()->getName()=='contact'?'active':''}}"><a
                    href="{{route('contact')}}">Contact</a></li>
            <li class="{{Request::route()->getName()==''?'active':''}}"><a
                    href="{{url('/backoffice')}}">Backoffice</a></li>
            @guest
            <li class="{{Request::route()->getName()=='login'?'active':''}}"><a href="{{route('login')}}">Login</a></li>
            @else
            <li class="{{Request::route()->getName()=='logout'?'active':''}}"><a href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
        </ul>
    </nav>
</header>
