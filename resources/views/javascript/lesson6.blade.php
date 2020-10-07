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
        background-color: grey;
        border: solid 1px;
    }

</style>

<body>
    <input type="text" name="" id="text1">
    <input type="text" name="" id="text2">
    <input type="button" value="運算" id="btn1">
    <div id="div1">
    </div>
</body>

</html>
<script>
    let text1 = document.getElementById('text1');
    let text2 = document.getElementById('text2');
    let div1 = document.getElementById('div1');
    let btn1 = document.getElementById('btn1');

    btn1.onclick = function () {
        let num1 = parseInt(text1.value);
        let num2 = parseInt(text2.value);
        let sum = (num1 + num2);
        if(isNaN(num1))
        {
            div1.innerHTML = "第一欄不是數字";
        }
        else if(isNaN(num2))
        {
            div1.innerHTML = "第二欄不是數字";
        }
        else
        {
            div1.innerHTML = sum;
        }
        
    }

</script>
