{{-- <h1>hello world</h1> --}}

<form action="{{ route('insert_query')}}" method="POST">
    @CSRF
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>