<div id='newsletter' class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					@if(Session::has('newsletter2'))
						<div class="alert alert-success" id="newsletterSuccess">
							Votre <strong>message</strong> a bien été envoyé.
						</div>
					@endif
					<form action="{{route('saveNewsletter')}}" method="POST" class="nl-form">
						@csrf
						<input name="email" type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</div>