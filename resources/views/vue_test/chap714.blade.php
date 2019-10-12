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
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <prompt-component></prompt-component>
    <prompt-component></prompt-component>
    <prompt-component></prompt-component>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var data = {
        counter : 0
    };
    Vue.component('prompt-component', {
        template: '<button @click="counter++">@{{ counter }}</button>',
        data: function () {
            return data;
        },
    });
    var app = new Vue({
        el: '#app',
        data:{
            title:'如果return出的對象引用外部一個對象，那這個對象就是共享的',
        }
    });
</script>
</body>
</html>

