<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($songs as $song)
        
    <div class="box">

        <div class="cover">
            <img src="{{$song -> cover}}" alt="">
        </div>
        <h2>{{$song -> title}}</h2>


    </div>
   @endforeach

</body>
</html>