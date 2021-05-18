<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Playlist</h1>
    <section>
        <div class="py-2 text-right">
            <a href="{{route('songs.create')}}"><button type="button" class="btn btn-success">Add. Movie</button></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">cover</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">genre</th>
                <th scope="col">released year</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($songs as $song)
                
            <tr>
                
                <td class="table_data"><img src="{{$song -> cover}}" alt=""></td>
                <td class="table_data">{{$song -> title}}</td>
                <td class="table_data">{{$song -> author}}</td>
                <td class="table_data">{{$song -> genre}}</td>
                <td class="table_data">{{$song -> released_year}}</td>
                <td class="table_data"><a href="{{route('songs.show',[ 'song'=> $song -> id ])}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>