@extends('layouts.adminLTE')
@section('content')
    <form method="get">
        <h1>Summary</h1>
        <table border="1">
            <input type="hidden" value="{{ $id }}" name="stu_id">
            <tr>
                <th>Section_id</th>
                <th>Class Name</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Drop</th>
            </tr>
            @foreach($result as  $rs)
                @foreach($rs->classes as $r)
                    <tr>
                        <td>{{ $r->id }} <input type="hidden" value="{{$r->id}}" name="class_id"></td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->teacher->name }}</td>
                        <td>{{ $r->subject->name }}</td>
                        <td><a href="{{ url('/student/drop/'.$id.'/'.$r->id)  }}">Drop</a></td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </form>

    <button><a href="{{ url('student') }}">Back</a></button>

@endsection