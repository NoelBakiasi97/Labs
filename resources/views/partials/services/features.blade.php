<div id="spad" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! App\Helper\Color::green($titres->titreFeatures) !!}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($services2 as $item)
						@if($loop->index<3)
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$item->title}}</h2>
									<p>{{$item->description}}</p>
								</div>
								<div class="icon">
									<i class="{{$item->icone}}"></i>
								</div>
							</div>
						@endif
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($services2 as $item)
						@if($loop->index>=3)
							<div class="icon-box light">
								<div class="icon">
									<i class="{{$item->icone}}"></i>
								</div>
								<div class="service-text">
									<h2>{{$item->title}}</h2>
									<p>{{$item->description}}</p>
								</div>
							</div>
						@endif 
					@endforeach
					<!-- feature item -->
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#card" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->