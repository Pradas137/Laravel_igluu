<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('resources/post/css/indexPost.css') }}" rel="stylesheet">
    <title>Posts</title>
</head>
<body>
    <h1 class="title">Index de POST</h1><br>
    <p><a href="/create">Crear Post</a></p><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Text</th>
                <th>User_id</th>
                <th>Images</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
         <tbody>
            @foreach($post as $posts)
                <tr>
                    <td>{{ $posts->id }}</td>
                    <td>{{ $posts->text }}</td>
                    <td>{{ $posts->user_id }}</td>
                    <td>
                        <img src="data:image/png;base64,{{$posts->images}}">
                    </td>
                    <td>{{ date('Y-m-d', strtotime($posts->updated_at )) }}</td>
                    <td>{{ date('Y-m-d', strtotime($posts->created_at)) }}</td>
                    <td>
                        <form action="post/{{$posts->id}}" method="post" class="d-inline">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>      