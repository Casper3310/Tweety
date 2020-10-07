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
    #div3 {
        width: 200px;
        height: 200px;
        background-color: grey;
        margin-top: 10px;
    }

</style>
<body>
    <input type="button" value="arguments例子1" id="btn1">
    <input type="button" value="arguments例子2" id="btn2">
    <input type="button" value="獲得非行間樣式" id="btn3">
    <input type="button" value="直接排序數字會當成字串處理" id="btn4">
    <input type="button" value="排序數字要自己寫比較" id="btn5">
    <p>arguments不定參數，不知道輸入多少參數時使用
    </p>
    <p>div.style.name只能取得行間樣式，其他非行間樣式要使用getComputedStyle()方法 
    </p>
    <p>IE7以下使用currentStyle</p>
    <p>陣列增加push()從陣列尾部增加unshift()從陣列頭部增加</p>
    <p>陣列減少pop()從陣列尾部減少shift()從陣列頭部減少</p>
    <p>陣列切splice("從第幾個元素開始刪除","刪除幾個元素","新增元素")</p>
    <p>陣列連接concat("陣列與陣列的連接")</p>
    <p>陣列元素連接join("元素與元素間的連接")</p>
    <p>排序sort()只能排序字串若排序數字需要比較函數</p>
    <div id="div1" style="width:200px; height: 200px;background-color:red;"></div>
    <div id="div2" style="width:200px; height: 200px;background-color:green; margin-top: 10px;"></div>
    <div id="div3"></div>
</body>

</html>
<script>
    function sum() {
        let result = 0;
        for (let i = 0; i < arguments.length; i++) {
            result += arguments[i];
        }
        return result;
    }
    let btn1 = document.getElementById('btn1');
    btn1.onclick = function () {
        alert(sum(10, 22, 5, 10, 22, 5, 10, 22, 5, 10, 22, 5));
    }

    let div2 = document.getElementById('div2');

    function css(obj, name, value) {
        if (arguments.length == 2) {
            return obj.style[name];
        } else if (arguments.length == 3) {
            arguments[0].style[arguments[1]] = arguments[2];
        }

    }

    function css2(div, name) {
        return div.style[name];
    }

    let bt2 = document.getElementById('btn2');
    btn2.onclick = function () {
        alert(css(div2, 'width'));

    }

    let btn3 = document.getElementById('btn3');
    let div3 = document.getElementById('div3');
    btn3.onclick = function()
    {
        console.log(getComputedStyle(div3).width);
    }
    let btn4 = document.getElementById('btn4');
    let arr=[11,81,53,67,4,76,245];
    console.log(arr);
    btn4.onclick = function()
    {
        console.log(arr.sort());
    }

    let btn5 = document.getElementById('btn5');
    btn5.onclick = function()
    {
        let sort_num = arr.sort(function(n1,n2)
        {
            return n1-n2;
            /*
            if(n1<n2)
            {
                return -1;
            }
            else if(n1>n2)
            {
                return 1;
            }
            else
            {
                return 0;
            }
            */
        });
        console.log(sort_num);
    }
</script>
