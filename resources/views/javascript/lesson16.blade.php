<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson16.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>多個物體變寬</p>
    <p>如果共用同一計時器會有問題</p>
    <div id="div1">
        <div>1</div>
        <div>2</div>
        <div>3</div>
    </div>
    <p>解決方法為各自都有計時器</p>
    <div id="div2">
        <div>4</div>
        <div>5</div>
        <div>6</div>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson16.js') }}"></script>

</html>
