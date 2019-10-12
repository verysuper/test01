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
    <input type="text" v-model="message" placeholder="輸入...">
    輸入的內容是:@{{ message }}
</div>
<div id="app2" v-cloak>
    <p v-once>@{{ title }}</p>
    <textarea v-model="message" placeholder="輸入..."></textarea>
    輸入的內容是:@{{ message }}
</div>
<div id="app3" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="text" @input="handleInput" placeholder="輸入...">
    輸入的內容是:@{{ message }}
</div>
<div id="app4" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="radio" v-model="picked" value="html" id="html">
    <label for="html">HTML</label>
    <input type="radio" v-model="picked" value="js" id="js">
    <label for="js">Javascript</label>
    <input type="radio" v-model="picked" value="css" id="css">
    <label for="css">CSS</label>
    選擇的項目:@{{ picked }}
</div>
<div id="app5" v-cloak>
    <p v-once>@{{ title }}</p>
    <input type="checkbox" v-model="checked" value="html" id="html">
    <label for="html">HTML</label>
    <input type="checkbox" v-model="checked" value="js" id="js">
    <label for="js">Javascript</label>
    <input type="checkbox" v-model="checked" value="css" id="css">
    <label for="css">CSS</label>
    選擇的項目:@{{ checked }}
</div>
<div id="app6" v-cloak>
    <p v-once>@{{ title }}</p>
    <p v-html="text"></p>
    <select name="" id="" v-model="selected">
        <option >html</option>
        <option value="js">Javascript</option>
        <option >css</option>
    </select>
    選擇的項目:@{{ selected }}
</div>
<div id="app7" v-cloak>
    <p v-once>@{{ title }}</p>
    <select name="" id="" v-model="selected" multiple>
        <option >html</option>
        <option value="js">Javascript</option>
        <option >css</option>
    </select>
    選擇的項目:@{{ selected }}
</div>
<div id="app8" v-cloak>
    <p v-once>@{{ title }}</p>
    <select name="" id="" v-model="selected">
        <option v-for="option in options" :value="option.value">
            @{{ option.text }}
        </option>
    </select>
    選擇的項目:@{{ selected }}
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            title:'一:1.文字框',
            message:'',
        },
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            title:'一:2.文本框',
            message:'',
        },
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            title:'一:3.即時更新',
            message:'',
        },
        methods:{
            handleInput:function (e) {
                this.message = e.target.value;
            }
        }
    });
    var app4 = new Vue({
        el: '#app4',
        data: {
            title:'二:1.單選按鈕',
            picked:'js',
        },
    });
    var app5 = new Vue({
        el: '#app5',
        data: {
            title:'三:1.複選按鈕',
            checked:['html','css'],
        },
    });
    var app6 = new Vue({
        el: '#app6',
        data: {
            title:'四:1.下拉按鈕',
            text: 'option是備選項，如果含有value屬性，v-model會優先匹配value的值，如果沒有，就會直接匹配option 的text',
            selected:'html',
        },
    });
    var app7 = new Vue({
        el: '#app7',
        data: {
            title:'四:2.下拉按鈕',
            selected:['html','js'],
        },
    });
    var app8 = new Vue({
        el: '#app8',
        data: {
            title:'四:3.下拉按鈕',
            selected:'html',
            options:[
                {
                    text:'HTML',
                    value:'html',
                },
                {
                    text:'Javascript',
                    value:'js',
                },
                {
                    text:'CSS',
                    value:'css',
                },
            ]
        },
    });
</script>
