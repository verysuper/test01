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
    <div>子組件</div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <button @click="handleRef">通過ref獲取子組件實例</button>
    <component-a ref="comA"></component-a>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var bus = new Vue();
    Vue.component('component-a',{
        template:'#component-a',
        data: function () {
            return {
                message: '子組件內容'
            }
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '子組件索引',
        },
        methods: {
            handleRef: function () {
                //通過$refs來訪問指定的實例
                var msg = this.$refs.comA.message;
                console.log(msg);
            }
        }
    })
</script>
</body>
</html>
