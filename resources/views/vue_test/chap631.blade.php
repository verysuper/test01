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
    <input type="text" v-model.lazy="message">
    <p>@{{ message }}</p>
</div>
<div id="app2" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="number" v-model.number="message">
    <p>@{{ typeof message }}</p>
</div>
<div id="app3" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="text" v-model.trim="message">
    <p>@{{ message }}</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            title:'一:.lazy:更改 input 內的值並不會馬上變更 model 的資料，而是等到滑鼠移到輸入框外，觸發 change 事件才更新',
            message:''
        },
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            title:'二:.number:我們在v-model所得到的值的資料型態是 string。.number 在輸入框輸入數字，然後印出這個數字的資料型別',
            message:123,
        },
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            title:'三:.trim:去除首尾空白。',
            message:'',
        },
    });
</script>
</body>
</html>

