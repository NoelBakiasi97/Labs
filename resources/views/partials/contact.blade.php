<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{!! App\Helper\Color::green($titres->titreContact) !!}</h2>
					</div>
					
					<p>{{$contact->text}}</p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">{{$contact->adress}}</p>
					<p class="con-item">Tel: {{$contact->number}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">

					@if(Session::has('newsletter'))
						<div class="alert alert-success" id="newsletterSuccess">
							Votre <strong>message</strong> a bien été envoyé.
						</div>
					@endif

					<form action="{{route('saveEmail')}}" method="POST" class="form-class" id="con_form">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="mssg" placeholder="Message"></textarea>
								<button class="site-btn">Send</button>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
