<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('storage/'.$header->logo)}}" alt="">
				<p>{{$header->text}}</p>
			</div>
		</div>

		<!-- slider -->
			<div id="hero-slider" class="owl-carousel">
				@foreach ($carousel as $item)
					<div class="item  hero-item" data-bg="{{asset('storage/'.$item->imgCar)}}"></div>
				@endforeach
			</div>

	</div>