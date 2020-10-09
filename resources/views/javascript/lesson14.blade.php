<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson14.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>DIV向右移動到300PX</p>
    <p>接近停止位置時直接設定位置讓人看不出來</p>
    <p>定時器開啟時要先關閉，防止同時啟動多個定時器</p>
    <button id="btn1">開始動</button>
    <div id="contant">
        <div id="div1">
        </div>
        <div id="div2">
            <p>分享到</p>
        </div>
    </div>
    <p>合併方法最簡單方式是把兩個功能一樣的方法不一樣部分用參數傳進去</p>
    <p>合併starmove2、starmove3</p>
    <button id="btn2">合併後開啟</button>
    <button id="btn3">合併後關閉</button>
</body>

<script type="text/javascript" src="{{ asset('js/lesson14.js') }}"></script>

</html>
