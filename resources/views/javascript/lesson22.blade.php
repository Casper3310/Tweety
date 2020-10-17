<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson22.css')."/?t=".date('i,s')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>讀取文件必須和網頁是統一編碼方式</p>
    <p>緩存(快取)cache有時會需要阻止以利及時訊息</p>
    <p>阻止快取cache常用方法為再引入檔案後方在GET時間</p>
    <p>GET時間後端不使用僅為前端判斷為不同時間檔案使用</p>
    <p>AJAX讀取出來為字串需使用eval()轉換為陣列</p>
    <p>eval() 函數會將傳入的字串當做 JavaScript 執行</p>
    <div id="div1"></div>
    <div id="div2"></div>
    {{ asset('css/lesson22.css')."/?t=".date('i,s')}}
</body>

<script type="text/javascript" src="{{ asset('js/lesson22.js') }}"></script>

</html>
