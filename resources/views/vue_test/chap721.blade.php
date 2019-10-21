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
<div id="app" v-cloak>
    <ol>
        <c-cart v-bind:item="val" v-for="val in cart"></c-cart>
    </ol>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>

<script>
    Vue.component('c-cart',{
        props:['item'],
        // delimiters: ['${', '}'],
        template: '<li>@{{ item.title }}</il>'
    });
    var app = new Vue({
        el: '#app',
        data: {
            cart: [
                {title: 'Coffee'},
                {title: 'Apple'},
            ],
        },
    });
</script>
</body>
</html>
