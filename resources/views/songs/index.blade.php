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
        <div class="playlist">
            @foreach ($songs as $song)
                
            <div class="box">
                <div class="cover">
                    <img src="{{$song -> cover}}" alt="">
                </div>
                <h2>{{$song -> title}}</h2>
                <h3>{{$song -> author}}</h3>
                <p>{{$song -> genre}}</p>
                <p>{{$song -> released_year}}</p>
                <a href="{{route('songs.show',[ 'song'=> $song -> id ])}}">Clicca per ulteriori dettagli</a>

            </div>
        @endforeach
        </div>
    </section>
</body>
</html>