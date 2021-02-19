@section('content')
<h1>Hellow !!!</h1>
<div class="row" style="margin-top: 5rem;">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Index Post</h2>
        </div>
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>text</th>
        <th>user_id</th>
        <th>image</th>
		<th>created_at</th>
		<th>updated_at</th>
    </tr>
    foreach($posts as $post)
       	<td>{{$post->text}}</td>
    endforeach
</table>      
@endsection