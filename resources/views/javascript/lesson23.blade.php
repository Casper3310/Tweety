<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson23.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>this為當前發生事件的物件</p>
    <p>以及當前的方法屬於誰</p>
    <p>不能再系統物件上增加屬性或方法，會有意外覆蓋的可能性</p>
    <p>系統物件包含Array,Date等內建的</p>
    <button id="btn1">第一個物件導向</button>
    <p>物件導向裡建立物件的函數叫做構造函數</p>
    <p>構造函數與一般函數無區別，僅僅是因為工作不同</p>
    <button id="btn2">多個資料輸入時</button>
    <p>工廠方式問題在於不同物件裡相同功能的方法判斷為不同方法</p>
    <p>沒有NEW會在寫程式時造成不便</p>
    <p>重複相同的函數在網站物件多時會平白占用大量資源</p>
    <button id="btn3">工廠方式缺點</button>
    <p>當在方法前使用new時瀏覽器會自動聲明一個空的物件this=new object之後又return回去</p>
    <button id="btn4">加入NEW</button>
    <p>將原型用到物件導向之中</p>
    <button id="btn5">在CLASS加入prototype</button>
    <p>在物件導向中用構造函數加屬性，用原型加方法</p>
    <p>屬性因為各個物件不同，方法通常相同</p>
</body>

<script type="text/javascript" src="{{ asset('js/lesson23.js') }}"></script>

</html>
