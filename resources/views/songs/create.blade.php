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
    <h1>Aggiungi una nuova canzone</h1>

    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">    
        </div>
        <div class="form-group">
            <label for="album">Album</label>
            <input type="text" class="form-control" id="album" placeholder="album" name="album">    
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" placeholder="author" name="author">    
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" placeholder="genre" name="genre">    
        </div>
        <div class="form-group">
            <label for="released_year">Year</label>
            <select class="form-control" name="released_year">
                @for ($i = 1900; $i <= date("Y") +1; $i++)
                    <option value="{{$i}}">{{$i}} </option>
                @endfor
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</body>
</html>