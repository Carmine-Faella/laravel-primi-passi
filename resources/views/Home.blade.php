<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi passi Laravel</title>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{route('Home')}}">Home</a></li>  
            <li><a href="{{route('Other')}}">About</a></li>          
        </ul>
    </nav>

    <div class="container">

        <h1>{{$welcome}}</h1>

        <ul>
            @foreach ($list as $item)
                <li>{{$item}}</li>
            @endforeach   
        </ul>
    </div>
    
</body>
</html>