@if(session()->has('error'))
	<div class="notification danger closeable">
		<p>{{ session('error') }}</p>
		<a class="close" href="#"></a>
	</div>
@endif