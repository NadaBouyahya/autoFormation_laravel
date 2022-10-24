<ul>
    @foreach ($promotions as $row )
    <li> {{$row->name}} <a href="/edit_form/{{$row->id}}">edit</a></li>
    @endforeach

</ul>

