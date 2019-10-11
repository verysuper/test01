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
<p v-pre>綁定class的幾種方法</p>
<div id="app1">
    <div :class="{'active':isActive}"></div>
</div>
<div id="app2">
    <div class="static" :class="{'active':isActive, 'error':isError}"></div>
</div>
<div id="app3">
    <div :class="classes"></div>
</div>
<div id="app4">
    <div :class="[activeCls, errorCls]"></div>
</div>
<div id="app5">
    <div :class="[isActive?activeCls:'', errorCls]"></div>
</div>
<div id="app6">
    <div :class="[{'active':isActive}, errorCls]"></div>
</div>
<div id="app7">
    <button :class="classes">button</button>
</div>
<div id="app8">
    <button :style="styles">button</button>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    var app1 = new Vue({
        el: '#app1',
        data: {
            isActive: true,
       },
    });
    var app2 = new Vue({
        el: '#app2',
        data: {
            isActive: true,
            isError: false,
        },
    });
    var app3 = new Vue({
        el: '#app3',
        data: {
            isActive: true,
            error: null,
        },
        computed:{
            classes:function () {
                return {
                    active: this.isActive && !this.error,
                    'text-fail': this.error && this.error.type ==='fail'
                }
            }
        }
    });
    var app4 = new Vue({
        el: '#app4',
        data: {
            activeCls: 'active',
            errorCls: 'error',
        }
    });
    var app5 = new Vue({
        el: '#app5',
        data: {
            isActive:true,
            activeCls: 'active',
            errorCls: 'error',
        }
    });
    var app6 = new Vue({
        el: '#app6',
        data: {
            isActive:true,
            errorCls: 'error',
        }
    });
    var app7 = new Vue({
        el: '#app7',
        data: {
            size:'large',
            disabled: true,
        },
        computed: {
            classes:function () {
                return [
                    'btn',
                    {
                        ['btn-'+ this.size]:this.size !=='',
                        ['btn-disabled']: this.disabled,
                    }
                ]
            }
        }
    });
    var app8 = new Vue({
        el: '#app8',
        data: {
            styles:{
                color: 'red',
                fontSize:18+ 'px'
            }
        },
    });
</script>
