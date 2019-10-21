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
<template id="component-a">
    <button @click="handleEvent">傳遞事件</button>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    @{{ message }}
    <component-a></component-a>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var bus = new Vue();
    Vue.component('component-a',{
        template:'#component-a',
        methods: {
            handleEvent: function () {
                bus.$emit('on-message','來自組件component-a 的內容')
            }
        },
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '非父子組件通信,使用bus',
            message: '',
        },
        mounted:function () {
            var _this = this;
            bus.$on('on-message',function (msg) {
                _this.message = msg;
            });
        }
    })
</script>
</body>
</html>
