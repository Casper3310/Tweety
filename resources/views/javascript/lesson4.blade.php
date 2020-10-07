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
    #div1 {
        width: 200px;
        height: 200px;
        border: solid 1px black;
        float: none;
    }

    .box {
        width: 200px;
        height: 200px;
        background-color: green;
        float: none;
    }

    div {
        width: 200px;
        height: 200px;
        border: solid 1px black;
        float: left;
        margin: 10px;
    }

</style>

<body>

    <input type="button" value="變紅" onclick="toRed()">
    <input type="button" value="變綠" onclick="toGreen()">
    <div id="div1">0
    </div>
    <div id="div2" class="box">1
    </div>
    <h5>"document"<標籤<"class"<"id"<行間</h5> <input id="bt1" type="button" value="變紅">
            <h5>匿名函數</h5>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
            <h5>For迴圈</h5>
            <input type="button" name="" id="checkAll_button" value="全選">
            <input type="button" name="" id="checkAll_button2" value="全不選">
            <input type="button" name="" id="checkAll_button3" value="反轉">
            <div id="div7">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
                <input type="checkbox" name="" id="">
            </div>
</body>

</html>
<script>
    {
        function toRed() {
            let div1 = document.getElementById('div1');
            div1.style.backgroundColor = 'red';
        }
    }

    {
        function toGreen() {
            let div1 = document.getElementById('div1');
            div1.className = 'box';
        }
    }

    let bt1 = document.getElementById('bt1');
    bt1.onclick = function () {
        div1.className = 'box';
    };

    {
        let AllDiv = document.getElementsByTagName('div');
        AllDiv[2].style.backgroundColor = 'red';
        AllDiv[3].style.backgroundColor = 'black';

        for (var i = 4; i < AllDiv.length; i++) {
            AllDiv[i].style.backgroundColor = 'yellow';
        }
    }


    {
        let checkAll_button = document.getElementById('checkAll_button');
        let div7 = document.getElementById('div7');
        checkAll_button.onclick = function () {
            let Allcheck_button = div7.getElementsByTagName('input');
            for (let i = 0; i < Allcheck_button.length; i++) {
                Allcheck_button[i].checked = true;
            }
        }
    } {
        let checkAll_button = document.getElementById('checkAll_button2');
        let div7 = document.getElementById('div7');
        checkAll_button.onclick = function () {
            let Allcheck_button = div7.getElementsByTagName('input');
            for (let i = 0; i < Allcheck_button.length; i++) {
                Allcheck_button[i].checked = false;
            }
        }
    } {
        let checkAll_button = document.getElementById('checkAll_button3');
        let div7 = document.getElementById('div7');
        checkAll_button.onclick = function () {
            let Allcheck_button = div7.getElementsByTagName('input');
            for (let i = 0; i < Allcheck_button.length; i++) {
                if (Allcheck_button[i].checked == true) {
                    Allcheck_button[i].checked = false;
                } else if(Allcheck_button[i].checked == false){
                    Allcheck_button[i].checked = true;
                }
            }
        }
    }

</script>
