<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson21.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>attachEvnent(事件,函數)在IE下使用</p>
    <p>chrome下使用addEventListener(事件,函數,false)</p>
    <button id="btn1">事件綁定</button>
    <button id="btn2">去除DOC事件</button>
    <div id="demo"></div>
    <div id="div1"></div>
    <div class="box"></div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson21.js') }}"></script>

</html>
