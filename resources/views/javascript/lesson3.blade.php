<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>作品首頁</title>
</head>

<style>
    #div1 {
        width: 200px;
        height: 200px;
        background-color: red;
    }

    #div2 {
        width: 200px;
        height: 200px;
        background-color: rebeccapurple;
    }

    #div3 {
        width: 200px;
        height: 200px;
        background-color: yellow;
    }

</style>
<script>
    function toWidth() {
        let div2 = document.getElementById('div2');
        div2.style.width = '400px';
    }

    function toHeight() {
        let div2 = document.getElementById('div2');
        div2.style.height = '400px';
    }

    function toGreen() {
        let div2 = document.getElementById('div2');
        div2.style.backgroundColor = 'green';
    }

    function BGColor(color) {
        let div1 = document.getElementById('div1');
        div1.style.backgroundColor = color;
    }

    function setStyle(styleOption,value) {
        let div3 = document.getElementById('div3');
        div3.style[styleOption] = value;
    }

</script>

<body>
    <input type="button" value="變紅" onclick="BGColor('Red')">
    <input type="button" value="變藍" onclick="BGColor('blue')">
    <input type="button" value="變黑" onclick="BGColor('black')">
    <div id="div1">
    </div>
    <input type="button" value="變高" onclick="toHeight()">
    <input type="button" value="變寬" onclick="toWidth()">
    <input type="button" value="變綠" onclick="toGreen()">
    <div id="div2">
    </div>
    <input type="button" value="變高" onclick="setStyle('height','100px')">
    <input type="button" value="變寬" onclick="setStyle('width','100px')">
    <input type="button" value="變紅" onclick="setStyle('backgroundColor','red')">
    <div id="div3">
    </div>
</body>

</html>
