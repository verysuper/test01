<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
</head>
<body>
<div id="app">
    <input type="text" v-model="name" placeholder="妳的名子">
    <h1>妳好，@{{ name }}</h1>
</div>
</body>
</html>
<script>
    var app = new Vue({
        el: document.getElementById('app'),
        // el: '#app',
        data: {
            name: '',
            a:2,
        },
        created:function () {
            console.log(this.a);
        },
        mounted:function () {
            console.log(this.$el);
        }
    });
</script>
