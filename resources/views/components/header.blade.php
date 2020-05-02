<header class="header-section">
    <div class="logo">
        <a href="{{route('welcome')}}"><img style="width:100px;" src="{{asset('storage/'.$header->logo)}}" alt=""></a>
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Request::route()->getName()=='welcome'?'active':''}}"><a href="{{route('welcome')}}">Home</a></li>
            <li class="{{Request::route()->getName()=='pageServices'?'active':''}}"><a href="{{route('pageServices')}}">Services</a></li>
            <li class="{{Request::route()->getName()=='pageBlog'?'active':''}}"><a href="{{route('pageBlog')}}">Blog</a></li>
            <li class="{{Request::route()->getName()=='pageContact'?'active':''}}"><a href="{{route('pageContact')}}">Contact</a></li>
            @can('backoffice')
                <li class="{{Request::route()->getName()=='backoffice'?'active':''}}"><a href="{{url('/backoffice')}}">Backoffice</a></li>
            @endcan

            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            @else
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
            
        </ul>
    </nav>
</header>
