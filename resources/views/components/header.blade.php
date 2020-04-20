<header class="header-section">
		<div class="logo">
			<a href="{{route('welcome')}}"><img src="img/logo.png" alt=""></a>
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="{{Request::route()->getName()=='welcome'?'active':''}}"><a href="{{route('welcome')}}">Home</a></li>
				<li class="{{Request::route()->getName()=='services'?'active':''}}"><a href="{{route('services')}}">Services</a></li>
				<li class="{{Request::route()->getName()=='blog'?'active':''}}"><a href="{{route('blog')}}">Blog</a></li>
				<li class="{{Request::route()->getName()=='contact'?'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</header>