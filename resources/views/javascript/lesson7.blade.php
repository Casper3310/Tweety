<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>作品首頁</title>
</head>
<style>

</style>

<body>
    
    <input type="text" name="" id="text1">
    <input type="button" value="數字轉時間" id="btn1">
    <input type="button" value="陣列和JSON" id="btn2">
    <p>碰到陣列建議使用FOR(let i=0;i<=length;i++)這種</p>
    <p>碰到物件建議使用FOR(let i in json)這種</p>
    <p>DOM使javascript可以操作HTML各物件</p>
    <p>typeOf()方法可以查看變數類型  </p>
    <p>轉整數parseInt()、轉小數parseFloat()、確認非數字isNaN()</p>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</body>

</html>
<script>
    let All_li = document.getElementsByTagName('li');
    for (i = 0; i < All_li.length; i++) {
        if (i % 2 == 0) {
            All_li[i].style.backgroundColor = 'yellow'
        } else {
            All_li[i].style.backgroundColor = 'blue'
        }
    } {
        let text1 = document.getElementById('text1');
        let btn1 = document.getElementById('btn1');
        btn1.onclick = function () {
            alert(parseInt(text1.value / 60) + "分" + text1.value % 60 + "秒")
        }
    } {
        let btn2 = document.getElementById('btn2')
        btn2.onclick = function () {
            let json = {
                A: 111,
                B: 222,
                C: 333,
                D: 444
            }
            let array = [1, 2, 3, 4];
            for (let i in json) {
                alert(i+":"+json[i]);
            }
        }
    }

</script>
