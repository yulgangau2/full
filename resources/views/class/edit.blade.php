@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" placeholder="class Name" name="name" value="{{ $class->name }}"></p>
        <button type="submit">Edit</button>
    </form>
@endsection