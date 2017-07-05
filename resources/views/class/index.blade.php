@extends('layouts.adminLTE')

@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Teacher</th>
            <th>Subject</th>
            <th>View Students</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($classes as $class)
            <tr>
                <td>{{ $class->id  }} </td>
                <td> {{ $class->name  }} </td>
                <td>{{ $class->teacher->name }}</td>
                <td>{{ $class->subject->name }}</td>
                <td><a href="{{ url('classes/summary/'.$class->id) }}">View</a></td>
                <td><a href="{{ url('classes/edit/'.$class->id) }}">EDIT</a></td>
                <td><a href="{{ url('classes/delete/'.$class->id) }}">DELETE</a></td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ url('') }}">Menu</a></button>
    <a href="{{ url('classes/insert') }}">
        <button>Add Class</button>
    </a>
@endsection
