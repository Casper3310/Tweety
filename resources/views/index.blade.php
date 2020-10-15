<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Javascript</h1>
                <ul class="list-group" id="learn_list">javascript學習
                    <li class="list-group-item"><a href="{{ route('lesson1') }}">第一個JAVASCRIPT</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson2') }}">lesson2改變標籤屬性</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson3') }}">lesson3第二種改變屬性方法</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson4') }}">lesson4屬性優先順、FOR迴圈</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson5') }}">lesson5 innerHTML使用</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson6') }}">lesson6 字串轉整數parseInt、字串轉小數parseFloat、確認非數字isNaN</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson7') }}">lesson7 %取餘數運用 For in讀取json</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson8') }}">lesson8 arguments不定參數 陣列常用方法</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson9') }}">lesson9 定時器及其應用</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson10') }}">lesson10 子父元素使用，第三種DOM操作方法</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson11') }}">lesson11 建立、插入、刪除元素</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson12') }}">lesson12 元素應用、搜尋概念及方法</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson13') }}">lesson13 元素集合及排序</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson14') }}">lesson14 方法合併</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson15') }}">lesson15 均速移動</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson16') }}">lesson16 多物體運動注意</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson17') }}">lesson17 仿FLASH運動圖片播放</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson18') }}">lesson18 鏈式運動</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson19') }}">lesson19 事件冒泡、滑鼠可視區</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson20') }}">lesson20 取消默認事件、拖曳</a></li>
                    <li class="list-group-item"><a href="{{ route('lesson21') }}">lesson21 事件綁定、拖曳外框、滾動條</a></li>

                </ul>
            </div>
            <div class="col-sm">
                <h1>PHP</h1>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('line_Notify') }}">串接Line notify API</a></li>
                    <li class="list-group-item"><a href="{{ route('email') }}">E-Mail</a></li>
                    <li class="list-group-item"><a href="{{ route('messagebord') }}">留言板</a></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
            </div>
            <div class="col-sm">
                <h1>作品</h1>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('home') }}">Tweety</a></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
            </div>
        </div>
    </div>
    
</body>
<footer>
    <h5>參考</h5>
    <ul>
        <li><a href="https://www.w3schools.com/html/html_lists.asp">HTML/CSS</a></li>
        <li><a href="https://getbootstrap.com/docs/4.5/components/alerts/">bootstrap</a></li>
        <li><a href="https://www.runoob.com/php/php-tutorial.html">PHP</a></li>
        <li><a href="https://laravel.com/docs/7.x/routing">Laravel</a></li>
        <li><a href="https://laracasts.com/series/laravel-6-from-scratch">laracasts</a></li>
        <li><a href="https://magiclen.org/lamp/">安裝LAMP</a></li>
        <li><a href="https://notify-bot.line.me/doc/en/">LINE notify API</a></li>
        <li><a href="https://www.w3schools.com/js/default.asp">Javascript</a></li>
        <li><a href="https://mailtrap.io/inboxes/1034653/messages">mailtrap</a></li>
        <li><a href="https://oscarotero.com/jquery/">jquery</a></li>
        <li><a href="https://horace1123.pixnet.net/blog/post/25307613">Linux指令</a></li>
        <li><a href="https://bugswarehouse.blogspot.com/2018/07/gcpgceubuntuapachelaravel56.html">GCE使用Linux</a>
        </li>
    </ul>
</footer>
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</html>
