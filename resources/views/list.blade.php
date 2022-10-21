<ul>
    @foreach ($promotions as $row )
    <li> {{$row->name}} <a href="/edit/{{$row->id}}">edit</a></li>
    @endforeach

</ul>

