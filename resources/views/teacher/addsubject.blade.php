@extends('layouts.adminLTE')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{ $id }}" name="id">
        <p>Subjects
            <select name="subject_id">
                @foreach ($subjects as $subject)
                    <option value="{{$subject->id}}">{{ $subject->name  }}</option>
                @endforeach
            </select>
        </p>
        <button type="submit">ADD</button>
    </form>
    </body>
    </html>
@endsection