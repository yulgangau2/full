@extends('layouts.adminLTE')
@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
        </tr>
        @foreach ($subjects as $subject)
            @foreach ($subject->subject as $sub)
                <tr>
                    <td>{{ $sub->id }}</td>
                    <td>{{ $sub->name }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
@endsection