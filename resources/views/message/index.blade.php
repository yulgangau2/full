@extends('layouts.adminLTE')

@section('content')
    <div id="y" style="background-color: #00a65a;height: 700px;" >
        <button v-on:click="msg()">Click</button>
        <li v-for="item in test">
            @{{ item['text'] }}
        </li>
    </div>
<div id="x">

        <div style="bottom: 170px;position: absolute;background-color: red;width: 100%;background-color: #00a7d0;padding-top: 5px">
            <p style="width: 100%;padding-left: 20px;"><input type="text" style="width: 80%" v-model="text"><button style="width: 10%" v-on:click="chat()">Send</button></p>
        </div>
</div>
<script>
    window.onload = function () {
        var test = new Vue ({
            el:'#x',
            data: {
                'text' : ''
            },
            methods:{
                chat: function () {
                    this.$http.post('/api/insert', { message: this.text })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            // Wu oh! Something went wrong
                            console.log(error.message);
                        });
                }
            }
        });

        var test2 = new Vue({
            el:'#y',
            data: {
                'texts': ' ',
                'test' : [],
                'messages': []
            },
            computed: {
                msg2: function () {
                    this.$http.get('/api/get/message')
                        .then((response) => {
                            this.test  =  response.data
                            console.log(response);
                            console.log('work '+ this.test)

                        }, error => {
                            console.log(error.message);
                        });
                }
            },
            methods:{
                msg: function () {
                        this.$http.get('/api/get/message')
                            .then((response) => {
                                this.test  =  response.data
                                console.log(response);
                                console.log('work '+ this.test)

                            }, error => {
                                console.log(error.message);
                            });
                }
            }
        })
    }
</script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection