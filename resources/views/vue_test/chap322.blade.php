<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="app1">
    <p v-pre>計算屬性依賴其他實例數據</p>
</div>
<div id="app2">
    <h1>@{{ reversedText }}</h1>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            text: '123,4567',
       },
    });
    var app2 = new Vue({
        el: '#app2',
        computed:{
            reversedText: function () {
                return app1.text.split(',').reverse().join(',');
            }
        }
    });
</script>
