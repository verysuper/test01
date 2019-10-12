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
    <p v-once>@{{ title }}</p>
    <prompt-component></prompt-component>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var Prompt = {
        template: '<div><p>@{{ message }}</p><button @click="sayHi">Say Hi!</button></div>',
        data: function () {
            return {
                message: 'Hello World!'
            }
        },
        methods: {
            sayHi: function() {
                alert('Hi');
            }
        }
    };
    var app = new Vue({
        el: '#app',
        data:{
            title:'局部註冊 (Local Registration)',
        },
        components: {
            'prompt-component': Prompt
        }
    });
</script>
</body>
</html>
