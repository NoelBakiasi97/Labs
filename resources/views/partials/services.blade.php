<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! App\Helper\Color::green($titres->titreServices) !!}</h2>
			</div>
			<div class="row">
				
				@foreach ($services as $item)
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$item->icone}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$item->title}}</h2>
								<p>{{$item->description}}</p>
							</div>
						</div> 
					</div>
				@endforeach
				
			</div>
			
			@if (Request::is('pageServices'))
				<div class="text-right">
					{{$services->links()}}
				</div>
			@endif

			<div class="text-center">
				@if (Request::is('pageServices'))
					<a href="#spad" class="site-btn">Browse</a>
				@else
					<a href="{{route('pageServices')}}" class="site-btn">Browse</a>
				@endif
			</div>
		</div>
	</div>
	<!-- services section end -->