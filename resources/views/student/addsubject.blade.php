@extends('layouts.adminLTE')

@section('content')




    <table border="1">
        <tr>
            <th>Class ID</th>
            <th>Class Name</th>
            <th>Teacher Name</th>
            <th>Subject Name</th>
            <th>ADD</th>
        </tr>

        @foreach($classes as $class)
            <tr>
                <form method="post" action="">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$id}}" name="id">
                    <td>{{  $class->id  }} <input type="hidden" value="{{ $class->id  }}" name="class_id"></td>
                    <td>{{  $class->name  }}</td>
                    <td>{{  $class->teacher->name  }} </td>
                    <td>{{  $class->subject->name  }}</td>
                    <td>
                        <button type="submit">ADD</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>
@endsection