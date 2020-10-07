<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson11.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>建立新元素document.createElement('元素名');</p>
    <p>插入父元素appendChild("插入元素");</p>
    <input type="text" name="" id="text1">
    <button id="btn1">建立li</button>
    <ul id="ul1">
    </ul>


    <p>insertBefore("元素名","在誰之前")</p>
    <input type="text" name="" id="text2">
    <button id="btn2">建立li</button>
    <ul id="ul2">
    </ul>

    <p>刪除子元素removeChild</p>
    <button id="btn3">建立li</button>
    <ul id="ul3">
        <li><button>刪除</button></li>
        <li><button>刪除</button></li>
        <li><button>刪除</button></li>
        <li><button>刪除</button></li>
        <li><button>刪除</button></li>
        <li><button>刪除</button></li>
    </ul>
</body>
<script>
    let btn1 = document.getElementById('btn1');
    let ul1 = document.getElementById('ul1');   
    let text1 = document.getElementById('text1');
    btn1.onclick = function()
    {
        let li = document.createElement('li');
        li.innerHTML = text1.value;
        ul1.appendChild(li);       
    };

    let btn2 = document.getElementById('btn2');
    let ul2 = document.getElementById('ul2');   
    let text2 = document.getElementById('text2');
    let All_li = ul2.getElementsByTagName('li')
    btn2.onclick = function()
    {
        let li = document.createElement('li');
        li.innerHTML = text2.value;
        ul2.insertBefore(li,All_li[0]);       
    };

    let btn3 = document.getElementById('btn3');
    let ul3 = document.getElementById('ul3'); 
    let ul3_All_btn = ul3.getElementsByTagName('button');
    for(let i=0; i<ul3_All_btn.length; i++)
    {
        ul3_All_btn[i].onclick = function()
        {
            ul3.removeChild(this.parentNode);
        };
    }
</script>

</html>
