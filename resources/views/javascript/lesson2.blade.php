<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="link1" href="{{ url('css/lesson2.css') }}" rel="stylesheet" >
    <title>lesson2</title>
</head>

<script>
    function toGreen()
    {
        let div2=document.getElementById('div2');
        div2.style.width = '200px';
        div2.style.height = '200px';
        div2.style.backgroundColor = 'green';
    }

    function toRed()
    {   
        let div2=document.getElementById('div2');
        div2.style.width = '100px';
        div2.style.height = '100px';
        div2.style.backgroundColor = 'red';
    }

    function skin1()
    {
        let link1 = document.getElementById('link1');
        link1.href = "{{ url('css/lesson2.css') }}";
    }

    function skin2()
    {
        let link1 = document.getElementById('link1');
        link1.href = "{{ url('css/lesson2_css2.css') }}";
    }

    function showhide()
    {
        let div3 =document.getElementById('div3');
        if(div3.style.display == 'none')
        {
            div3.style.display = 'block';
        }
        else
        {
            div3.style.display = 'none';
        }

    }
</script>
<body>
    <p>改變標籤屬性</p>
    <input type="button" value="按鈕1" onclick="skin1()">
    <input type="button" value="按鈕2" onclick="skin2()">
    <p>使用onmouseover和onmouseout</p>
    <input type="checkbox" onmouseover="div1.style.display = 'block'" onmouseout="div1.style.display = 'none'">
    <div id="div1">
        滑鼠移上會出現
    </div>
    <div id="div2" onmouseover="toGreen()" onmouseout="toRed()" >
    </div>
    <input type="button" value="顯示隱藏" onclick="showhide()">
    <div id="div3">

    </div>
</body>

</html>
