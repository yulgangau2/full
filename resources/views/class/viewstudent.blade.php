@extends ('layouts.adminLTE')

@section('content')

    <h1>No.{{ $summarys[0]->id }} Class Name {{ $summarys[0]->name }}</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
        </tr>
        @foreach ( $summarys as $students)
            @foreach($students->student as $st)
                <tr>
                    <td>{{ $st->id }}</td>
                    <td>{{ $st->name }}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
@endsection