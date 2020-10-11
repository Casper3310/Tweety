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
    <div style="background-color: red" onclick="ss()">
        <div style="background-color: gray" onclick="ss()">
            <div style="background-color: green" onclick="ss()">

            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson19.js') }}"></script>

</html>
