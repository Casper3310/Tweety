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
    #div1 .active {
        background-color: yellow;
    }

    #div1 div {
        width: 200px;
        height: 200px;
        background-color: grey;
        border: solid 1px;
        display: none;
    }

    #div2 {
        width: 200px;
        height: 200px;
        background-color: grey;
        border: solid 1px;
    }

    .flex-container {
        margin-top: 10px;
        width: 400px;
        display: flex;
        flex-wrap: wrap;
        background-color: DodgerBlue;
      }
      
      .flex-container > div {
        border:solid 1px black;
        width: 100px;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
        
      }
      .text{
          width: 400px;
          height: 100px;
          margin-top: 10px;
          text-align: center;
          background-color: rgb(78, 134, 81);
      }
      .act{
        background-color: yellow;
      }

</style>

<body>
    <div id="div1">
        <input class="active" type="button" value="1">
        <input type="button" value="2">
        <input type="button" value="3">
        <input type="button" value="4">
        <div style="display: block">111</div>
        <div>222</div>
        <div>333</div>
        <div>444</div>
    </div>
    <input type="text" name="" id="text2">
    <input type="button" value="設置文字" id="bt2">
    <div id="div2"></div>
    <div id="tab" class="flex-container">
        <div class="act">1</div>
        <div>2</div>
        <div>3</div>  
        <div>4</div>
        <div>5</div>
        <div>6</div>  
        <div>7</div>
        <div>8</div>
        <div>9</div>  
        <div>10</div>
        <div>11</div>
        <div>12</div>  
      </div>
    <div id="text" class="text">
        <h2>一月</h2>
        <p>行程是HNKSHI</p>
    </div>
</body>
<script>
    {
        let div1 = document.getElementById('div1');
        let Allbutton = div1.getElementsByTagName('input');
        let Alldiv = div1.getElementsByTagName('div');
        for (let i = 0; i < Allbutton.length; i++) {
            Allbutton[i].num = i;
            Allbutton[i].onclick = function () {
                for (let j = 0; j < Allbutton.length; j++) {

                    Allbutton[j].className = '';
                    Alldiv[j].style.display = 'none';
                }
                this.className = 'active';
                Alldiv[this.num].style.display = 'block';

            }
        }
    } {
        let bt2 = document.getElementById('bt2');
        let text2 = document.getElementById('text2');
        let div2 = document.getElementById('div2')
        bt2.onclick = function () {
            div2.innerHTML = text2.value;
        }
    }
    {
        let tab = document.getElementById('tab');
        let AllDiv = tab.getElementsByTagName('div');
        let text = document.getElementById('text');
        for(let i=0;i<AllDiv.length;i++)
        {
            AllDiv[i].onmouseover = function()
            {
                this.className = 'act';
                text.innerHTML = i+1+"月";
            }
            AllDiv[i].onmouseout = function()
            {
                this.className = '';
            }
        }


    }

</script>

</html>
