@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <p>Name <input type="text" placeholder="Class Name" name="name"></p>
        <p>Teacher
            <select name="teacher_id">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id  }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </p>
        <p>Subject
            <select name="subject_id">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id  }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </p>
        <button type="submit">Add class</button>
    </form>
    </body>
    </html>
@endsection