@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" placeholder="Student Name" name="name"></p>
        <button type="submit">Add Student</button>
    </form>
    </body>
    </html>
@endsection