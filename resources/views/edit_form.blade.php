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

        <a href="{{route('add_student', ['id'=>$new_data[0]->id_promotion])}}">Ajouter apprenant</a>

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
                    <td>
                        <a href="/edit_student_form/{{ $row->id_student }}">edit</a>
                        <a href="/student_deleted/{{ $row->id_student }}">delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>