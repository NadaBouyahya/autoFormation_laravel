<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        
       <h3>City : {{$city->city_name}}</h3> 
        <ul>
            @foreach ($city->citizen as $city_citizen)
                <li>{{$city_citizen->name}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>