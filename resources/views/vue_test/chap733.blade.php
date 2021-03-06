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
<template id="my-component">
    <div>
        <button @click="handleClick">+1</button>
    </div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <p>總數: @{{ total }}</p>
    <my-component @input="handleGetTotal"></my-component>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('my-component',{
        template: '#my-component',
        data: function () {
            return {
                counter: 0,
            }
        },
        methods: {
            handleClick: function () {
                this.counter++;
                this.$emit('input', this.counter);
            },
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '自定義事件,@input',
            total: 0,
        },
        methods: {
            handleGetTotal: function (total) {
                this.total = total;
            }
        },
    });
</script>
</body>
</html>
