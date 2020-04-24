<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($articles as $item)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset('storage/'.$item->img)}}" alt="">
							<div class="post-date">
								<h2>{{$item->created_at->format('d')}}</h2>
								<h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($item->created_at)), 3, $end='')}}
									{{$item->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$item->title}}</h2>
							<div class="post-meta">
								<span><a href="">{{$item->categorie->categorie}}</a></span>
								<span>@foreach ($item->tags->shuffle()->take(3) as $index=>$tag)
									@if($loop->last)
									<a href="">{{$tag->tag}}</a>
									@else
									<a href="">{{$tag->tag}}</a> |
									@endif
									@endforeach</span>
								
								<span><a href="">{{$item->comments->count()}} comments</a></span>
							</div>
							<p>{{Illuminate\Support\Str::limit($item->text,50,'...')}}</p>
							<a href="{{route('showArticle', $item->id)}}" class="read-more">Read More</a>
						</div>
					</div>
                @endforeach

                <div class="page-pagination">
                    {{$articles->links()}}
                </div>

            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $item)
                        	<li><a href="{{route('showCategorie', $item->id)}}">{{$item->categorie}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
						@foreach ($tags as $item)
                        	<li><a href="">{{$item->tag}}</a></li>
						@endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                            metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                            turpis at ultricies vestibulum.</p>
                    </div>
                </div>

			</div>
			
        </div>
    </div>
</div>
<!-- page section end-->