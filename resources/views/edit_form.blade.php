<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="/edit/{{$new_data[0]->id_promotion}}" method="POST">
            @csrf
            <input type="text" name='name' value="{{$new_data[0]->name}}">
            <button type="submit">save</button>
        </form>

        
    <table>
        <thead>
            <th>Prénom</th>
            <th>nom</th>
            <th>email</th>
            <th>paramétres</th>
        </thead>

        <tbody>
            @foreach ($new_data as $row)
                <tr>
                    <td>{{ $row->prénom }}</td>
                    <td>{{ $row->nom }}</td>
                    <td>{{ $row->email }}</td>
                    <td><a href="/edit_form/{{ $row->id }}">edit</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>