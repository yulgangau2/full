@extends('layouts.adminLTE')
@section('content')
    <h1>Teacher List</h1>
    <div>

    </div>

    <div id="x">
        <table border="1" v-if="check">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
            </tr>

            <tr>
                <td>@{{teacherDetail.id}}</td>
                <td>@{{teacherDetail.name}}</td>
                <td>@{{teacherDetail.LastName}}</td>
            </tr>
        </table>


        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>View</th>
            </tr>
                <tr v-for="teacher in teachers">
                    <td>@{{ teacher['id']  }}</td>
                    <td>@{{ teacher['name'] }}</td>
                    <td>
                        <button v-on:click="sentId( teacher['id'])">View</button>
                    </td>
                </tr>
        </table>

    </div>

    <script>


        window.onload = function () {
            var x = new Vue({
                el: '#x',
                data: {
                    'id': '',
                    'teacherDetail': [],
                    'teachers': [],
                    'check': false,
                    'auth': '{{ $auth }}'
                },
                created: function () {
                    this.$http.get('/api/teacher/list')
                        .then((response) => {
                            this.teachers = response.data['list'];
                            console.log(this.teachers);

                        }, error => {
                            console.log(error.message);
                        });
                },
                methods: {
                    sentId: function (id) {
                        if (this.auth == '') {
                            alert('You don\'t have permission ')
                        } else {
                            this.$http.get('/api/teacher/show/' + id)
                                .then((response) => {
                                    this.check = true;
                                    this.teacherDetail = response.data;

                                }, error => {
                                    console.log(error.message);
                                });
                        }
                    }
                }
            })
        };
    </script>

@endsection
