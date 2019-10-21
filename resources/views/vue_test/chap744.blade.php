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
<template id="child-component">
    <div class="container">
        <slot msg="來自子組件的內容"></slot>
    </div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <child-component>
        <template scope="props">
            <p>來自父組件的內容</p>
            <p>@{{ props.msg }}</p>
        </template>
    </child-component>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('child-component',{
        template: '#child-component',
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '作用域插槽: 使用一個可以複用的模板替換以渲染的元素',
        }
    });
</script>
</body>
</html>
