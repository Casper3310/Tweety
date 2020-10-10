<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson17.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <div id="playimages" class="play">
        <ul class="big_pic">
            <div class="prev"></div>
            <div class="next"></div>

            <div class="text">載入圖片說明</div>
            <div class="length">計算圖片數量</div>
            
            <a class="mark_left" href=""></a>
            <a class="mark_right" href=""></a>
            <div class="bg"></div>

            <li style="z-index: 1"><img src="{{ asset('images/1.jpg')}}" alt=""></li>
            <li><img src="{{ asset('images/2.jpg')}}" alt=""></li>
            <li><img src="{{ asset('images/3.jpg')}}" alt=""></li>
            <li><img src="{{ asset('images/4.jpg')}}" alt=""></li>
            <li><img src="{{ asset('images/5.jpg')}}" alt=""></li>
            <li><img src="{{ asset('images/6.jpg')}}" alt=""></li>
        </ul>
        <div class="small_pic">
            <ul style="width: 390px">
                <li style="opacity: 1"><img src="{{ asset('images/1.jpg')}}" alt=""></li>
                <li><img src="{{ asset('images/2.jpg')}}" alt=""></li>
                <li><img src="{{ asset('images/3.jpg')}}" alt=""></li>
                <li><img src="{{ asset('images/4.jpg')}}" alt=""></li>
                <li><img src="{{ asset('images/5.jpg')}}" alt=""></li>
                <li><img src="{{ asset('images/6.jpg')}}" alt=""></li>
            </ul>
        </div>
    </div>

</body>

<script type="text/javascript" src="{{ asset('js/lesson17.js') }}"></script>

</html>
