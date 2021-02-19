<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('resources/post/css/createPost.css') }}" rel="stylesheet">
    <title>Post Form</title>
</head>
<body>
    <h1>Index de POST</h1>
    <form id="formulario" method="POST" action="/post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>Text</label>
        <textarea name="post_text" id="post_text" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label>Images</label>
        <input type="file" name="images">
        <input type="submit" value="save">
    </form>
</body>
</html>
   
</form>