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
    <h1 class="title">Index de POST</h1>
    <ol>
    @foreach($post as $posts)
        <li>{{$posts->text}}</li>
    @endforeach
    </ol>
</body>
</html>      