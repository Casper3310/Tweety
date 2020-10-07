<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson10.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>childNodes會把空白文本及前後標籤一起算</p>
    <button id="btn1">childNodes</button>
    <ul id="ul1">
        <li></li>
        <li></li>
    </ul>
    <p>children只會計算元素</p>
    <button id="btn2">children</button>
    <ul id="ul2">
        <li></li>
        <li></li>
    </ul>

    <p>children只會計算一層</p>
    <button id="btn3">children</button>
    <ul id="ul3">
        <li>
            <p>1111</p>
        </li>
        <li>
            <p>2222</p>
        </li>
    </ul>
    <p>parentNode父元素，點下後隱藏button標籤父元素li</p>
    <ul id="ul4">
        <li><button>隱藏</button></li>
        <li><button>隱藏</button></li>
        <li><button>隱藏</button></li>
        <li><button>隱藏</button></li>
        <li><button>隱藏</button></li>
        <li><button>隱藏</button></li>
    </ul>
    <p>offsetparent取得父元素定位屬性，若上一層沒有持續往上直到找到BODY</p>
    <div id="div1">
        <div id="div2">

        </div>
    </div>
    <p>firstChild第一個子元素，但是會計算文本元素</p>
    <ul id="ul5">
        <li></li>
        <li></li>
    </ul>
    <p>firstElementChild第一個子元素</p>
    <ul id="ul6">
        <li></li>
        <li></li>
    </ul>
    <p>setAttribute('屬性名稱','數值')</p>
    <input type="text" name="" id="text1">
    <button id="btn4">setAttribute</button>

    <p>firstElementChild第一個子元素</p>
    <button id="btn5">Class為BOX的Li變色</button>
    <ul id="ul7">
        <li class="box"></li>
        <li></li>
        <li class="box"></li>
        <li class="box"></li>
        <li></li>
        <li></li>
        <li class="box"></li>
    </ul>
    
</body>
<script>
    let ul1 = document.getElementById('ul1');
    let btn1 = document.getElementById('btn1');
    btn1.onclick = function () {
        alert(ul1.childNodes.length)
    }

    let ul2 = document.getElementById('ul2');
    let btn2 = document.getElementById('btn2');
    btn2.onclick = function () {
        alert(ul2.children.length)
    }

    let ul3 = document.getElementById('ul3');
    let btn3 = document.getElementById('btn3');
    btn3.onclick = function () {
        alert(ul3.children.length)
    }

    let ul4 = document.getElementById('ul4');
    let All_button = ul4.getElementsByTagName('button');
    for (let i = 0; i < (All_button.length); i++) {
        All_button[i].onclick = function () {
            this.parentNode.style.display = 'none';
        };
    }

    let ul5 = document.getElementById('ul5');
    /*ul5.firstChild.style.background = "red";*/

    let ul6 = document.getElementById('ul6');
    ul6.firstElementChild.style.background = "red";

    let text1 = document.getElementById('text1');
    let btn4 = document.getElementById('btn4');
    btn4.onclick = function(){text1.setAttribute('value','111')};

    let ul7 = document.getElementsByClassName('box');
    let btn5 = document.getElementById('btn5');
    btn5.onclick = function(){
        for(let i=0; i<ul7.length; i++)
        {
            if(ul7[i].className == 'box')
            {
                ul7[i].style.backgroundColor = 'yellow';
            }
        }
    };

</script>

</html>
