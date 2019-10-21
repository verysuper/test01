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
    <div :style="style">組件內容</div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <my-component :width="100"></my-component>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('my-component',{
        props:['width'],
        template: '#my-component',
        computed: {
            style: function () {
                return {
                    width: this.width + 'px'
                }
            }
        }
    });
    var app = new Vue({
        el: '#app',
        data:{
            title:'prop 作為需要被轉變的原始值傳入',
        }
    });
</script>
</body>
</html>
