<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modifica la canzone</h1>

    <form action="{{route('songs.update', ['movie'=> $song -> id])}}" method="post">

    @csrf

    @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title')? old('title') : $song -> title }}">    
        </div>
        <div class="form-group">
            <label for="album">Album</label>
            <input type="text" class="form-control" id="album" placeholder="album" name="album" value="{{old('album')? old('album') : $song -> album }}">    
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" placeholder="author" name="author" value="{{old('author')? old('author') : $song -> author }}">    
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" placeholder="genre" name="genre" value="{{old('genre')? old('genre') : $song -> genre }}">    
        </div>
        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="text" class="form-control" id="cover" placeholder="cover" name="cover" value="{{old('cover')? old('cover') : $song -> cover }}">    
        </div>
        <div class="form-group">
            <label for="released_year">Year</label>
            <select class="form-control" name="released_year">
                @for ($i = 1900; $i <= date("Y") +1; $i++)
                    <option value="{{$i}}" {{ old('released_year') == $i || $song -> released_year == $i ? 'selected' : '' }}>{{$i}} </option>
                @endfor
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary" value="invia">Salva</button>
    </form>
</body>
</html>