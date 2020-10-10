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
    <p>多個DIV淡入淡出</p>
    <p>各自屬性也需要獨立不共用</p>
    <p>所有動作物體都要獨立屬性不可共用</p>
    <div id="div3">
        <div>7</div>
        <div>8</div>
        <div>9</div>
    </div>
    <p>getComputedStyle(元素,偽元素).屬性</p>
    <p>JS裡obj.style.屬性只能獲得行間樣式</p>
    <p>而getComputedStyle能獲的所有屬性</p>
    <p>offset系列會把所有相關屬性都計算在內</p>
    <p>多物體運動框架除了透明度</p>
    <p>透明度數值為小數，且基礎單位不為PX</p>
    <p>電腦計算不能真正計算小數只能存近似值</p>
    <p>需要Math.round四捨五入避免問題</p>
    <div id="div4">
        <div>變高</div>
        <div>變寬</div>
        <div>透明度</div>
    </div>
</body>

<script type="text/javascript" src="{{ asset('js/lesson16.js') }}"></script>

</html>
