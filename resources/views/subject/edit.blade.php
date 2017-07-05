@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field()  }}
        <p>Name <input type="text" placeholder="Subject Name" name="name" value="{{ $subject->name }}"></p>
        <button type="submit">Edit</button>
    </form>
    </body>
    </html>
@endsection