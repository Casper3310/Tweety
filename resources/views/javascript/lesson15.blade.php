<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson15.css')}}">
    <title>作品首頁</title>
</head>

<body style="height: 2000px">
    <p>均速移動</p>
    <p>距離越遠，速度越大</p>
    <p>距離越近，速度越小</p>
    <p>速度與距離成正比</p>
    <p>速度計算為(目標距離-速度)/動多快</p>
    <p>電腦所能計算的最小單位如果除不盡會直接拋棄</p>
    <p>需取整數</p>
    <p><a href="https://www.w3schools.com/js/js_math.asp">HTML捲軸屬性JS操作方法</a></p>
    <p><a href="https://www.w3schools.com/js/js_math.asp">JS MATH方法參考</a></p>
    <button id="btn1">開始移動</button>
    <div id="contact">
        
        <div id="div1"></div>
        <div id="div2"></div>
        <div id="div3"></div>
    </div>
    
    <div id="div4"></div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson15.js') }}"></script>

</html>
