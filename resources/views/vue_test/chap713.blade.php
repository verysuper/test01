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
    <table>
        <tr is="example-item"></tr>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script type="text/x-template" id="my_component_with_template">
    <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
    </tr>
</script>
<script>
    var vm = new Vue({
        el: '#app',
        delimiters: ['${', '}'],
        components: {
            'example-item': {
                template: '#my_component_with_template'
            }
        }
    });
</script>
</body>
</html>
