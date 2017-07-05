<!doctype html>

<html lang="{{ app()->getLocale() }}" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
<div id="hola">
    <p>@{{ text }}</p>
    <p>
        <button v-on:click="test(text)">Click me</button>
        <input type="text" v-model="text"></p>
    <input type="text" v-on:keyup="test(text)" v-model="text">
</div>

<div id="x">
    <form method="post">
        {{csrf_field()}}
        <input type="text" name="name" v-model="n">
        <input type="text" name="age" v-model="a">
        <button  v-on:click="test3">Click</button>
    </form>
</div>


<script>
    window.addEventListener('load', function () {
        var exam = new Vue({
            el: '#hola',
            data: {
                test2: 'work',
                text: 'Write Here',
                text2: 'Try type'
            },
            methods: {
                test: function (event) {
                    alert(event);
                    console.log(event);
                }
            }
        });


        var a = new Vue ({
            el: '#x',
            data: {
                n: 'Name',
                a:  33,
                test: []
            },
            ready : function()
            {
                this.msg();

            },
            methods:{
                test3: function () {
                    alert('Name is : '+ this.n + ' Age is : ' + this.a);
                }
            }
        });
    })
</script>
<script src="{{ asset('js/vue.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
{{--<script src="https://unpkg.com/vue"></script>--}}
</body>
</html>
