tes all blog

@foreach($blogs as $blog) 
	<p>{{ $blog->title}}</p>
	<hr>
	<p>{{ $blog->subject}}</p>


@endforeach

