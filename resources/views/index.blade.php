@extends('layouts.adminLTE')

@section('content')
    <button><a href="{{ url('student') }}">Student</a></button>
    <button><a href="{{ url('subject') }}">subject</a></button>
    <button><a href="{{ url('classes') }}">Classes</a></button>
    <button><a href="{{ url('teacher') }}">teacher</a></button>


@endsection