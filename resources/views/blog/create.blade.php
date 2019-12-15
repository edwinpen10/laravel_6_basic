@if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
   
@endif


<h2>Insert data blog</h2>

<form action="/blog" method="post">
	<input type="text" name="title" placeholder="judul">
	<br>
	<textarea name="subject" placeholder="isi nya boss"></textarea>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<br>
	<input type="submit" name="name" value="post">
</form>