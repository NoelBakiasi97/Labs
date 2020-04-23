<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					
					@foreach ($services->take(3) as $item)				
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$item->icone}}"></i>
								</div>
								<h2>{{$item->title}}</h2>
								<p>{{$item->description}}</p>
							</div>
						</div>
					@endforeach
					
					
				</div>
			</div>
		</div>
		<!-- card section end-->
		<div class="about-contant">
				<div class="container">
					<div class="section-title">
						<h2>{!! App\Helper\Color::green($about->title) !!}</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>{{$about->para1}}</p>
						</div>
						<div class="col-md-6">
							<p>{{$about->para2}}</p>
						</div>
					</div>
					<div class="text-center mt60">
						@if ($about->btn)
							<a href="" class="site-btn">Browse</a>
						@endif
					</div>
					<!-- popup video -->
					<div class="intro-video">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<img src="{{asset('storage/'.$about->img)}}" alt="">
								<a href="{{$about->url}}" class="video-popup">
									<i class="fa fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>