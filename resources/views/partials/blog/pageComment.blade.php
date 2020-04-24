@extends('layouts.master')

@section('content')
    @include('components.header') {{-- same --}}
	@include('partials.pageHeader')
	
<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="img/blog/blog-1.jpg" alt="">
							<div class="post-date">
									<h2>{{$article->created_at->format('d')}}</h2>
									<h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}}
										{{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">Just a simple blog post</h2>
							<div class="post-meta">
								<span><a href="">{{$article->categorie->categorie}}</a></span>
								<span>@foreach ($article->tags->shuffle()->take(3) as $index=>$tag)
									@if($loop->last)
									<a href="">{{$tag->tag}}</a>
									@else
									<a href="">{{$tag->tag}}</a> |
									@endif
									@endforeach</span>
								
								<span><a href="">{{$article->comments->count()}} comments</a></span>
							</div>
							<p>{{$article->text}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('storage/'.$article->img)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->user->name}} <span>Author</span></h2>
								<p>{{$article->user->description}}</p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments {{$article->comments->count()}}</h2>
							<ul class="comment-list">

								@foreach ($comments as $item)
									<li>
										<div class="avatar">
											<img src="{{asset('storage/'.$item->user->img)}}" alt="">
										</div>
										<div class="commetn-text">
											<h3>{{$item->user->name}}| {{$article->created_at->format('d')}} {{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}}, {{$article->created_at->format('Y')}} | {{$article->created_at->format('H')}}H{{$article->created_at->format('i')}}</h3>
											<p>{{$item->comment}}</p>
										</div>
									</li>
								@endforeach
							</ul>

							<div class="page-pagination">
								{{$comments->links()}}
							</div>

						</div>
						<!-- Commert Form -->

						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form action="{{route('saveComment', $article)}}" method="post" class="form-class">
									@csrf
									<div class="row">
										<div class="col-sm-12">
											<textarea name="comment" placeholder="Message"></textarea>
											<button type="submit" class="site-btn">Send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
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
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
				
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->

	@include('partials.newsletter') {{-- same --}}
    @include('components.footer') {{-- same --}}
@endsection