<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ url('/update', $id)}}" method="post">
    @csrf

<label for="title">Title</label>
<input type="text" name="title" value="{{$post->title}}" id="title">
<br>

<label for="description">Description</label>
<input type="text" name="description" value="{{$post->description}}" id="description">
<br>

<button type="submit">Update</button>

</form>
</body>
</html>