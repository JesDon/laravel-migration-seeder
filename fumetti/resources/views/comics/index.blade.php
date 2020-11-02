<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @foreach ($comics as $comic)
        <div>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">
            <h3>{{$comic->original_title}}</h3>
            <h3>{{$comic->author}}</h3>
            <p>{{$comic->number}}</p>
            <p>{{$comic->n_pages}}</p>
            <p>{{$comic->edition}}</p>
            <p>{{$comic->reading}}</p>
            <p>{{$comic->price}}</p>
            <p>{{$comic->color}}</p>
            <p>{{$comic->release}}</p>
        </div>
        <hr>
    @endforeach
    
</body>
</html>