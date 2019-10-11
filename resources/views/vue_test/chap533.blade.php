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
        <template v-for="book in filterBooks">
            <li>書名 @{{ book.name }}</li>
            <li>作者 @{{ book.author }}</li>
        </template>
    </ul>

</div>
<div id="app2" v-cloak>
    <p v-once>@{{ message }}</p>
    <ul>
        <template v-for="book in sortedBooks">
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
            message: '過濾',
            books: [
                {
                    name: 'javascript 語言精隨',
                    author: 'douglas'
                },
                {
                    name: 'javascript 高級程序設計',
                    author: 'nicholas'
                },
                {
                    name: 'vue.js 實戰',
                    author: '梁願'
                },
            ],
        },
        computed:{
            filterBooks:function () {
                return this.books.filter(function (book) {
                    return book.name.match(/java/);
                })
            }
        }
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            message: '排序',
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
        computed: {
            sortedBooks: function () {
                return this.books.sort(function (a,b) {
                    return a.name.length < b.name.length;
                })
            }
        }
    });
</script>
