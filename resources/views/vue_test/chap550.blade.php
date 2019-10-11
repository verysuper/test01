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
    <template v-if="list.length">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>名稱</th>
                    <th>單價</th>
                    <th>數量</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in list">
                    <td>@{{ index+1 }}</td>
                    <td>@{{ item.name }}</td>
                    <td>@{{ item.price }}</td>
                    <td>
                        <button @click="handleReduce(index)" :disabled="item.count === 1">-</button>
                        @{{ item.count }}
                        <button @click="handleAdd(index)">+</button>
                    </td>
                    <td>
                        <button @click="handleRemove(index)">移除</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div>總價:@{{ totalPrice }}</div>
    </template>
    <div v-else>購物車為空</div>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            list:[
                {
                    id:1,
                    name:'iPhone7',
                    price:6188,
                    count:1,
                },
                {
                    id:2,
                    name:'iPad Pro',
                    price:5888,
                    count:1,
                },
                {
                    id:3,
                    name:'MacBook Pro',
                    price:21488,
                    count:1,
                },
            ],
        },
        computed:{
            totalPrice: function () {
                var total = 0;
                for(var i = 0;i<this.list.length;i++){
                    var item = this.list[i];
                    total += item.price *  item.count;
                }
                return total.toString().replace(/\B(?=(\d{3})+$)/g,',');
            }
        },
        methods:{
            handleReduce:function (index) {
                if(this.list[index].count === 1) return;
                this.list[index].count--;
            },
            handleAdd:function (index) {
                this.list[index].count++;
            },
            handleRemove:function (index) {
                this.list.splice(index,1);
            },
        }
    });
</script>
