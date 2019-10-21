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
    <div>component: @{{ count }}</div>
</template>
<div id="app" v-cloak>
    <my-component :init-count="1"></my-component>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('my-component',{
        props:['initCount'],
        template: '#my-component',
        data: function () {
            return {
                count: this.initCount,
            }
        }
    });
    var app = new Vue({
        el: '#app',
    });
</script>
</body>
</html>
