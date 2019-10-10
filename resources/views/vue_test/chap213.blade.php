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
    <h1>@{{ date }}</h1>
    <span v-html="link"></span>
    <p v-pre>@{{ 這裡內容不會被編譯 }}</p>
    <p>@{{ number /10 }}</p>
    <p>@{{ isOK?'確定':'取消' }}</p>
    <p>@{{ text.split(',').reverse().join(',') }}</p>
</div>
</body>
</html>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            date: new Date(),
            link: '<a href="#">這是一個連接</a>',
            number: 100,
            isOK:false,
            text: '123,456',
       },
        created:function () {
        },
        mounted:function () {
            var _this = this;//聲明一個變量指向Vue 實例this 保證作用域一致
            this.timer = setInterval(function () {
                _this.date = new Date();
            }, 1000);
        },
        beforeDestroy:function () {
            if(this.timer){
                clearInterval(this.timer);//在實例銷毀前清除定時器
            }
        }
    });
</script>
