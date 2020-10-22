<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson24.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>改寫為物件導向大原則</p>
    <p>1.function內不能有function，要分開</p>
    <p>2.把需要操作的東西放入屬性</p>
    <p>3.將東西初始化</p>
    <p>4.寫方法、更改錯誤</p>
    <p>this可以用conso.log看出來</p>
    <div id="div1">
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <div style="display: block">aaa</div>
        <div>bbb</div>
        <div>ccc</div>
    </div>

    <div id="div2">
        <button class="active">4</button>
        <button>5</button>
        <button>6</button>
        <button>7</button>
        <button>8</button>
        <div style="display: block">eee</div>
        <div>fff</div>
        <div>ggg</div>
        <div>hhh</div>
        <div>iii</div>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson24.js') }}"></script>

</html>
