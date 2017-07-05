@extends('layouts.adminLTE')

@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($classes as $class)
            @foreach ($class->classes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
@endsection