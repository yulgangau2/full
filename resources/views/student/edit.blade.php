@extends('layouts.adminLTE')

@section('content')
    <body>
    <h1>Edit student</h1>
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" name="name" value="{{ $student->name  }}"></p>
        <button type="submit">Edit</button>
    </form>
    </body>
    </html>
@endsection