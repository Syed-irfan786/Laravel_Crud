<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="border:2px">
    <th>Title</th>
    <th>Description</th>

    

@foreach($post as $po)

    <tr>
        <td>{{$po->title}}</td>
        <td>{{$po->description}}</td>
        <td>
        <form action="{{url('/delete', $po->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick = "return confirm('Are you sure you want to delete?')">Delete</button>
        </form>

        <form action="{{ url('/edit', $po->id)}}" method="post">
        @csrf
        <button type="submit">Edit</button>
        </form>

        </td>
    </tr>

@endforeach

</table>

    
</body>
</html>


<!-- burj e  khalifa -->
 
<!-- \\\\\\\\\\\\\\\\\\\
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\==================
/////////////////////////////////////////////////////////////////////////==================
/////////////////////////////////////////////////
//////////////////////////////
//////////// -->