<ul id="data_list">
    @foreach ($promotion as $row)
        <li> {{ $row->name }} <a href="/edit_form/{{ $row->id }}">edit</a></li>
    @endforeach
</ul>