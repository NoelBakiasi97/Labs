<footer class="footer-section">
	@if ($footer->position)
		<h2>{{$footer->text}} <a href="{{$footer->link}}" target="_blank">Colorlib</a></h2>	
	@else
		<h2><a href="{{$footer->link}}" target="_blank">Colorlib </a>{{$footer->text}}</h2>
	@endif
</footer>