<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第一個JAVASCRIPT</title>
</head>
<style>
    #div1
    {
        width: 100px; height: 100px; background-color: gold; border:1px solid; display: none;
    }

    #div2
    {
        width: 100px; height: 100px; background-color: grey; border:1px solid; 
    }
</style>
<script>
    function toGreen()
    {
        document.getElementById('div2').style.width = '100px'
        document.getElementById('div2').style.height = '100px'
        document.getElementById('div2').style.backgroundColor = 'green'
    }

    function toRed()
    {
        document.getElementById('div2').style.width = '500px'
        document.getElementById('div2').style.height = '500px'
        document.getElementById('div2').style.backgroundColor = 'red'
    }
</script>
<body>
    <p>使用onmouseover和onmouseout</p>
    <input type="checkbox" onmouseover="div1.style.display = 'block'" onmouseout="div1.style.display = 'none'">
    <div id="div1">
        滑鼠移上會出現
    </div>
    <div id="div2" onmouseover="toGreen()" onmouseout="toRed()" >

    </div>
</body>

</html>
