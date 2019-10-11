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
    <p v-once>@{{ message }}</p>
    <template v-if="type==='name'">
        <label for="">用戶名:
            <input type="text" placeholder="輸入用戶名" key="name_input">
        </label>
    </template>
    <template v-else>
        <label for="">郵箱:
            <input type="text" placeholder="輸入郵箱" key="mail_input">
        </label>
    </template>
    <button @click="handleToggleClick">切換輸入類型</button>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: '防止復用，可使用label 的for 屬性或input 的key 屬性',
            type: 'name',
        },
        methods:{
            handleToggleClick: function () {
                this.type = this.type === 'name'?'mail':'name';
            }
        }
    });
</script>
