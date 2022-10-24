<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <input type="text" id="search" placeholder="search">
    <ul>
        @foreach ($promotions as $row)
            <li> {{ $row->name }} <a href="/edit_form/{{ $row->id }}">edit</a></li>
        @endforeach
    </ul>
    <script src="{{URL::asset('js/script.js')}}"></script>
</body>

</html>
