<h1>Test Blog Laravel 6</h1>
<br>
@foreach($blogs as $blog) 
	<p>{{ $blog->title}}</p>
	<p>{{ $blog->subject}}</p>
<hr>

@endforeach

