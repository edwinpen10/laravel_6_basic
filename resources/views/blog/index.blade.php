{{Session::get('message')}}

<h1>Test Blog Laravel 6</h1>
<br>
@foreach($blogs as $blog) 
	<a href="/blog/{{$blog->id}}"><p>{{ $blog->title}}</p></a>
	<p>{{ $blog->subject}}</p>
<hr>

@endforeach

