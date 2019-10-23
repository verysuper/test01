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
    <ul>
        <slot name="book" v-for="book in books" :book-name="book.name"></slot>
    </ul>
</template>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <my-list :books="books">
{{--        作用域插槽也可以是具名的Slot--}}
        <template slot="book" scope="props">
            <li>@{{ props.bookName }}</li>
        </template>
    </my-list>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('my-list',{
        props:{
            books: {
                type: Array,
                default: function () {
                    return [];
                }
            }
        },
        template: '#child-component',
    });
    var app = new Vue({
        el: '#app',
        data: {
            title: '作用域插槽: 列表組件，允許組件自定義應改如何渲染列表每一項',
            books: [
                { name: 'vue.js 實戰' },
                { name: 'javascript 語言精粹' },
                { name: 'javascript 高級程序設計' },
            ]
        }
    });
</script>
</body>
</html>
