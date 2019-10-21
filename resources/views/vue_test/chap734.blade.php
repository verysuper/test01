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
        <input :value="value" @input="updateValue">
    </div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <p>總數: @{{ total }}</p>
    <my-component v-model="total"></my-component>
    <button @click="handleReduce">-1</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('my-component',{
        props: ['value'],
        template: '#my-component',
        methods: {
            updateValue: function (event) {
                this.$emit('input', event.target.value);
            },
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '自定義事件,表單輸入，雙向綁定',
            total: 0,
        },
        methods: {
            handleReduce: function () {
                this.total--;
            }
        },
    });
</script>
</body>
</html>
