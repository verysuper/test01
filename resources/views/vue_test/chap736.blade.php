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
    <button @click="handleEvent">透過父鏈直接修改數據</button>
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
                //訪問到父鏈後，可以做任何操作
                this.$parent.message = '來自組件 component-a 的內容'
            }
        },
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '父鏈',
            message: '',
        },
    })
</script>
</body>
</html>
