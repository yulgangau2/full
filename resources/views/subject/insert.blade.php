@extends('layouts.adminLTE')

@section('content')
    <body>
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" name="name" placeholder="Subject Name"></p>
        <button type="submit">Add Subject</button>
    </form>
    </body>
    </html>
@endsection