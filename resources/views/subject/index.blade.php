@extends('layouts.adminLTE')

@section('content')
    <h1>subjec List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>View Teacher</th>
            <th>View Class</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id  }} </td>
                <td> {{ $subject->name  }} </td>
                <td><a href="{{ url('subject/viewsubject/'.$subject->id)}}">View</a></td>
                <td><a href="{{  url('subject/viewclass/'.$subject->id) }}">View</a></td>
                <td><a href="{{ url('subject/edit/'.$subject->id) }}">EDIT</a></td>
                <td><a href="{{ url('subject/delete/'.$subject->id) }}">DELETE</a></td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ url('') }}">Menu</a></button>
    <a href="{{ url('subject/insert') }}">
        <button>Add Subject</button>
    </a>
@endsection
