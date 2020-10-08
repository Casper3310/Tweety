<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson13.css')}}">
    <title>作品首頁</title>
</head>

<body>
    
        <p>appendChild動作為先拿出後再插入</p>
        <button id="btn2">動作</button>
        <ul id="ul1">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>

        <ul id="ul2">

        </ul>
    
        <button id="btn3">動作</button>
        <ul id="ul3">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    <p>依照ID大小排序</p>
    <p>取出HTML元素為元素集合，sort方法只能排序陣列</p>
    <p>要先將元素集合擺放到陣列裡才能排序</p>
    <p>陣列排序後將元素插入BODY</p>
    <button id="btn1">排序</button>
    <table id="table1">
        <thead>
            <td>ID</td>
            <td>姓名</td>
            <td>年齡</td>
        </thead>
        <tbody>
            <tr>
                <td>7</td>
                <td>Blue</td>
                <td>22</td>
            </tr>
            <tr>
                <td>4</td>
                <td>blue</td>
                <td>37</td>
            </tr>
            <tr>
                <td>1</td>
                <td>王一</td>
                <td>22</td>
            </tr>
            <tr>
                <td>2</td>
                <td>呂二</td>
                <td>54</td>
            </tr>
            <tr>
                <td>5</td>
                <td>李三</td>
                <td>14</td>
            </tr>
            <tr>
                <td>6</td>
                <td>陳四</td>
                <td>47</td>
            </tr>
            <tr>
                <td>3</td>
                <td>李五</td>
                <td>34</td>
            </tr>
        </tbody>
    </table>
</body>

<script type="text/javascript" src="{{ asset('js/lesson13.js') }}"></script>

</html>
