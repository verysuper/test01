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
    <ul>
        <template v-for="(item, index1) in method_name">
            <li v-for="(value,key,index2) in item">
                @{{ index1 }} @{{ key }} @{{ value }}
            </li>
        </template>
    </ul>

</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            message: 'v-for 遍歷對象屬性時，有2個參數可選，分別為key 和 index, 數組更新的一些方法',
            method_name: [
                {name:'push()'},
                {name:'pop()'},
                {name:'shift()'},
                {name:'unshift()'},
                {name:'splice()'},
                {name:'sort()'},
                {name:'reverse()'},
                {name:'filter()'},
                {name:'concat()'},
                {name:'slice()'},
            ],
        },
    });
</script>
