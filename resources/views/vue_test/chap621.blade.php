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
<div id="app1" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="radio" v-model="picked" :value="value">
    <label>單選按鈕</label>
    <p>@{{ picked }}</p>
    <p>@{{ value }}</p>
</div>
<div id="app2" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="checkbox" v-model="toggle" :true-value="value1" :false-value="value2">
    <label>複選框</label>
    <p>@{{ toggle }}</p>
    <p>@{{ value1 }}</p>
    <p>@{{ value2 }}</p>
</div>
<div id="app3" v-cloak>
    <p v-once>@{{ title }}</p>
    <select name="" id="" v-model="selected">
        <option :value="{ number:123 }">123</option>
    </select>
    @{{ selected.number }}
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            title:'一:單選按鈕',
            picked:false,
            value:123,
        },
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            title:'二:複選框',
            toggle:false,
            value1:'a',
            value2:'b',
        },
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            title:'三:選擇列表',
            selected:'',
        },
    });
</script>
