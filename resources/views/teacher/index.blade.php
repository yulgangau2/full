@extends('layouts.adminLTE')

@section('content')
    <h1>Teacher</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Add subject</th>
            <th>View subject</th>
            <th>View Class</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id  }} </td>
                <td> {{ $teacher->name  }} </td>
                <td><a href="{{ url('teacher/addsubject/'.$teacher->id)  }}">Add subject</a></td>
                <td><a href="{{ url('teacher/viewsubject/'.$teacher->id) }}">View</a></td>
                <td><a href="{{ url('teacher/viewclass/'.$teacher->id)  }}">View</a></td>
                <td><a href="{{ url('teacher/edit/'.$teacher->id)  }}">EDIT</a></td>
                <td><a href="{{ url('teacher/delete/'.$teacher->id) }}">DELETE</a></td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ url('') }}">Menu</a></button>
    <a href="{{ url('teacher/insert') }}">
        <button>Add Teacher</button>
    </a>

@endsection