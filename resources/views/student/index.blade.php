@extends('layouts.adminLTE')

@section('content')
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        Logout
    </a>

<h1>subjec List</h1>
<div id="x">
    <h1>@{{ text  }}</h1>
@{{ text }} <input type="text" v-model="text"><button  v-on:click="test()">Try to Click Me</button>
    <textarea name="" id="" cols="30" rows="10" v-model="text"></textarea>

    <span v-if="text != ''">
        <button  v-on:click="test(aaa)"  style="background-color: green;">Try to Click Me</button>
    </span>
    <span v-else>
        <button  v-on:click="test(aaa)" disabled style="background-color: red;">Please input Value</button>
    </span>
</div>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Add Subject</th>
        <th>View Schdulling</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id  }} </td>
            <td> {{ $student->name  }} </td>
            <td><a href="{{url('student/addsubject/'.$student->id )}}">Add Subject</a></td>
            <td><a href="{{url('student/summary/'.$student->id )}}">View Summary</a></td>
            <td><a href="{{ url('student/edit/'.$student->id) }}">EDIT</a></td>
            <td><a href="{{ url('student/delete/'.$student->id) }}">DELETE</a></td>
        </tr>
    @endforeach
</table>
<button><a href="{{ url('') }}">Menu</a></button>
<a href="{{ url('student/insert') }}">
    <button>Add Student</button>
</a>

<script>
    window.onload = function () {
        var hola = new Vue({
            el: '#x',
            data: {
                text: 'work',
                check: false
            },
            methods: {
                test: function () {
                    alert('Hola');
                }
            }
        });
    }
</script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection