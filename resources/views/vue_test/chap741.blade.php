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
<template id="child-component1">
    <div>子組件1</div>
</template>
<template id="child-component2">
    <div v-show="showChild2">子組件2</div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <child-component1 v-show="showChild1"></child-component1>
    <child-component2></child-component2>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('child-component1',{
        template: '#child-component1',
    });
    Vue.component('child-component2',{
        template: '#child-component2',
        data: function () {
            return {
                showChild2:true,
            }
        }
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '內容分發作用域',
            showChild1: true,
        }
    });
</script>
</body>
</html>
