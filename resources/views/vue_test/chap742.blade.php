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
        <div class="header">
            <slot name="header"></slot>
        </div>
        <div class="main">
{{--            匿名 slot--}}
{{--            <slot></slot>--}}
        </div>
        <div class="footer">
            <slot name="footer"></slot>
        </div>
    </div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <child-component>
        <h2 slot="header">標題</h2>
        <p>正文內容</p>
        <p>更多的正文內容</p>
        <div slot="footer">底部訊息</div>
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
            title: '具名 Slot: 如果沒有指定匿名slot，父組件內多餘的內容片段都將被拋棄',
        }
    });
</script>
</body>
</html>
