@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" placeholder="Teacher Name" name="name"></p>
        <button type="submit">Add Teacher</button>
    </form>
    </body>
    </html>
@endsection