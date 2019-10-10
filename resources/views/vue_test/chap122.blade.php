<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
</head>
<body>
<div id="app">
    <ul>
        <li v-for="book in books">@{{ book.name }}</li>
    </ul>
</div>
</body>
</html>
<script>
    new Vue({
        el: '#app',
        data: {
            books: [
                {name: 'aaa'},
                {name: 'bbb'},
                {name: 'ccc'},
            ],
        },
    });
</script>
