<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="app">
    <p v-pre>計算屬性</p>
    <h1>總價: @{{ prices }}</h1>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            package1:[
                {
                    name: 'iPhone 7',
                    price: 7199,
                    count: 2,
                },
                {
                    name: 'iPad',
                    price: 2888,
                    count: 1,
                }
            ],
            package2:[
                {
                    name: 'apple',
                    price: 3,
                    count: 5,
                },
                {
                    name: 'banana',
                    price: 2,
                    count: 11,
                }
            ],
       },
        computed:{
            prices: function () {
                var prices = 0;
                for(var i = 0; i<this.package1.length; i++){
                    prices += this.package1[i].price * this.package1[i].count;
                }
                for(var i = 0; i<this.package2.length; i++){
                    prices += this.package2[i].price * this.package2[i].count;
                }
                return prices;
            }
        },
        filters:{
        },
        created:function () {
        },
        mounted:function () {
        },
        beforeDestroy:function () {
        }
    });
</script>
