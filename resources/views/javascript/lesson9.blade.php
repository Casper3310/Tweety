<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson9.css')}}">
    <title>作品首頁</title>
</head>
<style>

</style>

<body>
    <p>setInterval('函數','毫秒')一直執行</p>
    <p>setTimeout('函數','毫秒')只執行一次</p>
    <p>clearInterval，clearTimeout關閉定時器</p>
    <p>Date()獲得時間物件</p>
    <input type="button" value="開啟setinterval" id="btn1">
    <input type="button" value="關閉setinterval" id="btn2">
    <p>顯示在Console</p>
    <div id="clock">
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
        :
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
        :
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
        <img class="img_size" src="{{ asset('images/0.jpg') }}" alt="">
    </div>
    <p>延遲出現、延遲消失</p>
    <p>相同的動作可以整併在一起</p>

    <div id="div1"></div>
    <div id="div2"></div>

    <div id="div3"></div>
    <p>offsetLeft、offset系列可以取的計算後的數值</p>
    <input type="button" value="移動DIV" id="btn3">
    <p id="p1">無縫滾圖、滑鼠停止</p>
    <button id="btn5">向左走</button>
    <button id="btn6">向右走</button>
    <div id="div4">
        <ul class="img-container" id="ul1">
            <li class="image_float"><img src="{{ asset('images/P1.jpg') }}" alt=""></li>
            <li class="image_float"><img src="{{ asset('images/P2.jpg') }}" alt=""></li>
            <li class="image_float"><img src="{{ asset('images/P3.jpg') }}" alt=""></li>
            <li class="image_float"><img src="{{ asset('images/P4.jpg') }}" alt=""></li>
            <li class="image_float"><img src="{{ asset('images/P5.jpg') }}" alt=""></li>
        </ul>
    </div>


</body>

</html>

<script>
    function show() {
        console.log('a');
    }

    let btn1 = document.getElementById('btn1');
    let btn2 = document.getElementById('btn2');
    btn1.onclick = function () {
        timer1 = setInterval(show, 1000);
    }
    btn2.onclick = function () {
        clearInterval(timer1);
    }

    function Join_0(n) {
        if (n < 10) {
            return '0' + n;
        } else {
            return '' + n;
        }
    }

    function ticker() {
        let clock_time = new Date();
        let All_image = document.getElementsByTagName('img');
        let image_path = "{{ asset('images') }}";
        let str = Join_0(clock_time.getHours()) + "" + Join_0(clock_time.getMinutes()) + "" + Join_0(clock_time
            .getSeconds());
        //console.log(str)
        for (let i = 0; i < str.length; i++) {
            All_image[i].src = image_path + "/" + str[i] + ".jpg";
        }
    }
    ticker();
    timer2 = setInterval(ticker, 1000)

    let div1 = document.getElementById('div1');
    let div2 = document.getElementById('div2');

    div1.onmouseover = function () {
        div2.style.display = "block"
    }
    div1.onmouseout = div2.onmouseout = function () {
        timer_delay = setTimeout(function () {
            div2.style.display = "none";
        }, 500);
    }
    div2.onmouseover = function () {
        clearTimeout(timer_delay);
        div2.style.display = "block"
    }

    let btn3 = document.getElementById('btn3');
    let div3 = document.getElementById('div3');
    btn3.onclick = function () {
        move_div = setInterval(function () {
            div3.style.left = div3.offsetLeft - 220 + "px";
            console.log(div3.offsetLeft);
            if (div3.offsetLeft > 1000) {
                clearInterval(move_div);
            };
        }, 30)


    }

    let div4 = document.getElementById('div4');
    let ul1 = document.getElementById('ul1');
    let li = ul1.getElementsByTagName('li');
    ul1.innerHTML = ul1.innerHTML + ul1.innerHTML;
    ul1.style.width = (li[0].offsetWidth) * (li.length) + "px";

    function move() {
        if (-(ul1.offsetLeft) > (ul1.offsetWidth) / 2) {
            ul1.style.left = 0;
        }
        ul1.style.left = ul1.offsetLeft - 2 + "px";
    }

    function move2() {
        if ((ul1.offsetLeft) > (ul1.offsetWidth) / 2) {
            ul1.style.left = 0;
        }
        ul1.style.left = ul1.offsetLeft + 20 + "px";
    }

    let timer3 = setInterval(move, 30);

    div4.onmouseover = function () {
        clearInterval(timer3);
    }
    div4.onmouseout = function () {
        timer3 = setInterval(move, 30);
    };
    let btn5 = document.getElementById('btn5');
    let btn6 = document.getElementById('btn6');
    btn5.onclick = function () {
        clearInterval(timer3);
        timer3 = setInterval(move, 30);
    };
    btn6.onclick = function () {
        clearInterval(timer3);
        timer3 = setInterval(move2, 30);
    };

</script>
