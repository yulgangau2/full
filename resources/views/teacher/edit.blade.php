@extends('layouts.adminLTE')

@section('content')
    <h1>Edit Teacher</h1>
    <form method="post">
        {{ csrf_field()  }}
        <p>Name <input type="text" value="{{  $teacher->name }}" name="name"></p>
        <button type="submit">EDIT</button>
    </form>
@endsection