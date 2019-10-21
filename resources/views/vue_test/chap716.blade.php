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
<script type="text/x-template" id="my_component_with_template">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
    </tr>
</script>
<div id="app" v-cloak>
    <p v-once>@{{ title }}</p>
    <table>
        <tr is="example-item"></tr>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
    Vue.component('example-item',{
        template: '#my_component_with_template'
    });
    var vm = new Vue({
        el: '#app',
        // delimiters: ['${', '}'],
        data: {
            title:'全域註冊 (Registration)',
        }
        // components: {
        //     'example-item': {
        //         template: '#my_component_with_template'
        //     }
        // }
    });
</script>
</body>
</html>
