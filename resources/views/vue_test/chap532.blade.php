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
    <p v-once>@{{ message }}</p>
    <ul>
        <template v-for="book in books">
            <li>書名 @{{ book.name }}</li>
            <li>作者 @{{ book.author }}</li>
        </template>
    </ul>

</div>
<div id="app2" v-cloak>
    <p v-once>@{{ message }}</p>
    <ul>
        <template v-for="book in books">
            <li>書名 @{{ book.name }}</li>
            <li>作者 @{{ book.author }}</li>
        </template>
    </ul>

</div>
<div id="app3" v-cloak>
    <p v-once>@{{ message }}</p>
    <ul>
        <template v-for="book in books">
            <li>書名 @{{ book.name }}</li>
            <li>作者 @{{ book.author }}</li>
        </template>
    </ul>

</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            message: '數組更新1',
            books: [
                {
                    name: 'vue.js 實戰',
                    author: '梁願'
                },
                {
                    name: 'javascript 語言精隨',
                    author: 'douglas'
                },
                {
                    name: 'javascript 高級程序設計',
                    author: 'nicholas'
                },
            ],
        },
    });
    app1.books = app1.books.filter(function (item) {
        return item.name.match(/java/);
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            message: '數組更新2',
            books: [
                {
                    name: 'vue.js 實戰',
                    author: '梁願'
                },
                {
                    name: 'javascript 語言精隨',
                    author: 'douglas'
                },
                {
                    name: 'javascript 高級程序設計',
                    author: 'nicholas'
                },
            ],
        },
    });
    app2.books.splice(3,1,{
        name: 'css揭密',
        author:'希 lea'
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            message: '數組更新3',
            books: [
                {
                    name: 'vue.js 實戰',
                    author: '梁願'
                },
                {
                    name: 'javascript 語言精隨',
                    author: 'douglas'
                },
                {
                    name: 'javascript 高級程序設計',
                    author: 'nicholas'
                },
            ],
        },
    });
    app3.books.splice(1);
</script>
