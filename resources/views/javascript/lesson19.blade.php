<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson19.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>onclick事件裡系統會回傳一個參數</p>
    <p>事件冒泡繪像上傳直到最頂</p>
    <div class="event_bubble" style="background-color: red" onclick="ss('red')">
        <div class="event_bubble" style="background-color: gray" onclick="ss('gray')">
            <div class="event_bubble" style="background-color: green" onclick="ss('green')">
            </div>
        </div>
    </div>
    <p>阻止冒泡</p>
    <p>事件物件裡的cancelBubble設定為true</p>
    <button id="btn1">顯示</button>
    <div id="div1"></div>
    <p>clientX、clientY為可視區座標</p>
    <p>須加上scrollTop</p>
    <p>clientX、clientY要加上scrollTop，scrollLeft</p>
    <p>返回JSON形式要用大誇號{}</p>
    <p>按下左右會移動</p>
    <button id="btn2">跟著滑鼠移動</button>
    <div id="div2"></div>
    <button id="btn3">一串跟著滑鼠的DIV</button>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div class="div3"></div>
    <div id="div4"></div>

</body>

<script type="text/javascript" src="{{ asset('js/lesson19.js') }}"></script>

</html>
