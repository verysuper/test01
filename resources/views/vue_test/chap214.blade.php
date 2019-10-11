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
    <h1>@{{ date | formatDate }}</h1>
    <p v-pre>1.串聯</p>
    <p v-pre>@{{ message | filterA | filterB }}</p>
    <p v-pre>2.接收參數,'arg1', 'arg2' 分別傳給過濾器的第2第3個參數，因為第1個是數據本身</p>
    <p v-pre>@{{ message | filterA('arg1', 'arg2') }}</p>
</div>
</body>
</html>
<script>
    var padDate = function (value) {
        return value < 10? '0'+value: value;
    };
    var app = new Vue({
        el: '#app',
        data: {
            date: new Date(),
       },
        filters:{
            formatDate: function (value) {
                var date = new Date(value);
                var year = date.getFullYear();
                var month = padDate(date.getMonth()+1);
                var day = padDate(date.getDay());
                var hours = padDate(date.getHours());
                var minutes = padDate(date.getMinutes());
                var seconds = padDate(date.getSeconds());
                return year+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds;
            }
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
