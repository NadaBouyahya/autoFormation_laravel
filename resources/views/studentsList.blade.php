<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href=""> Ajouter apprenant</a>
    <input type="text" id="search" placeholder="search">

    <table>
        <thead>
            <th>Prénom</th>
            <th>nom</th>
            <th>email</th>
            <th>paramétres</th>
        </thead>

        <tbody>
            @foreach ($students as $row)
                <tr>
                    <td>{{ $row->prénom }}</td>
                    <td>{{ $row->nom }}</td>
                    <td>{{ $row->email }}</td>
                    <td><a href="/edit_form/{{ $row->id }}">edit</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- <input type="text" id="search" placeholder="search">
    <ul id="data_list">
        @foreach ($students as $row)
            <li> <span>{{ $row->prénom }} </span>  <span>{{ $row->nom}} </span><span>{{ $row->email}} <span></span><a href="/edit_form/{{ $row->id }}">edit</a></li>
        @endforeach
    </ul> --}}
    <script src="{{URL::asset('js/script.js')}}"></script>
</body>

</html>
