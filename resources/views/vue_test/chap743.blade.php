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
    <div>
        <slot>
            <p>如果父組件沒有插入內容，我將作為默認出現</p>
        </slot>
    </div>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <child-component>
        <p>分發的內容</p>
        <p>更多分發的內容</p>
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
            title: '單個 Slot:',
        }
    });
</script>
</body>
</html>
