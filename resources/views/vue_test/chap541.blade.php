<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        [v-cloak]{
            display: none;
        }
    </style>
</head>
<body>
<div id="app1" v-cloak>
    <p v-once>@{{ message }}</p>
    點擊次數: @{{ counter }}
    <button @click="handleAdd()">+1</button>
    <button @click="handleAdd(10)">+10</button>
</div>
<div id="app2" v-cloak>
    <p v-once>@{{ message }}</p>
    <a href="http://www.apple.com" @click="handleClick('禁止打開',$event)">打開鏈接</a>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            message: '方法',
            counter: 0,
        },
        methods:{
            handleAdd:function (count) {
                count = count || 1;
                this.counter += count;
            }
        }
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            message: '事件',
            counter: 0,
        },
        methods:{
            handleClick:function (message,event) {
                event.preventDefault();
                window.alert(message);
            }
        }
    });
</script>
