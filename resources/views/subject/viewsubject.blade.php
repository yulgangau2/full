@extends('layouts.adminLTE')
@section('content')
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        @foreach ($subjects as $subject)
            @foreach($subject->teacher as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{ $t->name }}</td>
                </tr>
            @endforeach
        @endforeach

    </table>
@endsection