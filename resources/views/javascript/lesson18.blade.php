<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson18.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>連續執行函數</p>
    <div id="div1"></div>
    <p>以JSON形式可以實現同時多個屬性改變</p>
    <button id="btn1">同時變寬變高</button>
    <div id="div2"></div>
    <p>當其中一項數值到達時定時器就關閉</p>
    <button id="btn3">同時變寬變高</button>
    <div id="div4"></div>
    <p>改變定時器關閉條件，當沒有不到的屬性時，關定時器</p>
    <button id="btn2">同時變寬變高2</button>
    <div id="div3"></div>
    <div id="div5">
        <p>鍊式運用</p>
        <textarea name="" id="text1" cols="40" rows="4" placeholder="輸入文字"></textarea>
        <button id="btn4">發布</button>
        <ul id="ul1">
            <li>sad</li>
        </ul>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/function.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lesson18.js') }}"></script>

</html>
