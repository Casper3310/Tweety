<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lesson12.css')}}">
    <title>作品首頁</title>
</head>

<body>
    <p>表格簡易用法</p>
    <table id="table1">
        <thead>
            <td>ID</td>
            <td>原本</td>
            <td>簡易</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>getElementsByTagName('tbody')[0]</td>
                <td>tBodies[0]</td>
            </tr>
            <tr>
                <td>2</td>
                <td>getElementsByTagName('tr')[0]</td>
                <td>rows[0]</td>
            </tr>
            <tr>
                <td>3</td>
                <td>getElementsByTagName('td')[0]</td>
                <td>cells[0]</td>
            </tr>
            <tr>
                <td>4</td>
                <td>getElementsByTagName('thead')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
            <tr>
                <td>5</td>
                <td>getElementsByTagName('tfoot')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
        </tbody>
    </table>

    <p>格行變色，表格欄位數/2</p>
    <table id="table2">
        <thead>
            <td>ID</td>
            <td>原本</td>
            <td>簡易</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>getElementsByTagName('tbody')[0]</td>
                <td>tBodies[0]</td>
            </tr>
            <tr>
                <td>2</td>
                <td>getElementsByTagName('tr')[0]</td>
                <td>rows[0]</td>
            </tr>
            <tr>
                <td>3</td>
                <td>getElementsByTagName('td')[0]</td>
                <td>cells[0]</td>
            </tr>
            <tr>
                <td>4</td>
                <td>getElementsByTagName('thead')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
            <tr>
                <td>5</td>
                <td>getElementsByTagName('tfoot')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
        </tbody>
    </table>

    <p>加上滑鼠移入移出</p>
    <table id="table3">
        <thead>
            <td>ID</td>
            <td>原本</td>
            <td>簡易</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>getElementsByTagName('tbody')[0]</td>
                <td>tBodies[0]</td>
            </tr>
            <tr>
                <td>2</td>
                <td>getElementsByTagName('tr')[0]</td>
                <td>rows[0]</td>
            </tr>
            <tr>
                <td>3</td>
                <td>getElementsByTagName('td')[0]</td>
                <td>cells[0]</td>
            </tr>
            <tr>
                <td>4</td>
                <td>getElementsByTagName('thead')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
            <tr>
                <td>5</td>
                <td>getElementsByTagName('tfoot')</td>
                <td>tHead(只有一個元素非陣列)</td>
            </tr>
        </tbody>
    </table>

    <p>輸入、刪除功能</p>
    <p>運用到createElement創立、AppendChird插入元素</p>
    姓名:<input type="text" name="" id="name" placeholder="姓名">
    年齡:<input type="text" name="" id="age" placeholder="年齡">
    <button id="btn1">加入</button>
    <table id="table4">
        <thead>
            <td>ID</td>
            <td>姓名</td>
            <td>年齡</td>
            <td>刪除</td>
        </thead>
        <tbody>
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
                <td>3</td>
                <td>李三</td>
                <td>14</td>
            </tr>
            <tr>
                <td>4</td>
                <td>陳四</td>
                <td>47</td>
            </tr>
            <tr>
                <td>5</td>
                <td>李五</td>
                <td>34</td>
            </tr>
        </tbody>
    </table>

    <p>搜尋</p>
    <p>忽略大小寫，將所有字串轉成大小或小寫統一</p>
    <p>search()方法可以搜尋輸入的字串是否存在，若存在返回字串在第幾個位置，不存在則返回-1</p>
    <p>toLowerCase()是方法不是屬性</p>
    <p>split("值")方法能讓字串以值為切割</p>
    姓名:<input type="text" name="" id="name2" placeholder="姓名">
    <button id="btn2">搜尋</button>
    <table id="table6">
        <thead>
            <td>ID</td>
            <td>姓名</td>
            <td>年齡</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Blue</td>
                <td>22</td>
            </tr>
            <tr>
                <td>1</td>
                <td>blue</td>
                <td>22</td>
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
                <td>3</td>
                <td>李三</td>
                <td>14</td>
            </tr>
            <tr>
                <td>4</td>
                <td>陳四</td>
                <td>47</td>
            </tr>
            <tr>
                <td>5</td>
                <td>李五</td>
                <td>34</td>
            </tr>
        </tbody>
    </table>
</body>
<script>
    let tab1 = document.getElementById('table1');
    let td = tab1.tBodies[0].rows[0].cells[0];
    td.style.backgroundColor = "yellow";

    let tab2 = document.getElementById('table2');
    let td2 = tab2.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (let i = 0; i < td2.length; i++) {
        if (i % 2) {
            td2[i].style.backgroundColor = "yellow";
        }
    }

    let tab3 = document.getElementById('table3');
    let td3 = tab3.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    let old_color = "";
    for (let i = 0; i < td3.length; i++) {
        td3[i].onmouseover = function() {
            old_color = this.style.backgroundColor;
            this.style.backgroundColor = "grey";
        };
        td3[i].onmouseout = function() {
            this.style.backgroundColor = old_color;
        };
        if (i % 2) {
            td3[i].style.backgroundColor = "yellow";
        }
    }

    let tab4 = document.getElementById('table4');
    let tb4 = tab4.getElementsByTagName('tbody');
    let btn1 = document.getElementById('btn1');
    let name = document.getElementById('name');
    let age = document.getElementById('age');
    let rows_num = tb4[0].getElementsByTagName('tr').length
    btn1.onclick = function() {

        let new_tr = document.createElement('tr');

        let new_td = document.createElement('td');
        new_td.innerHTML = rows_num + 1;
        rows_num += 1;
        new_tr.appendChild(new_td);

        new_td = document.createElement('td');
        new_td.innerHTML = name.value;
        new_tr.appendChild(new_td);

        new_td = document.createElement('td');
        new_td.innerHTML = age.value;
        new_tr.appendChild(new_td);

        new_td = document.createElement('td');
        new_td.innerHTML = "<button>刪除</button>";
        new_tr.appendChild(new_td);
        new_td.getElementsByTagName('button')[0].onclick = function() {
            tb4[0].removeChild(this.parentNode.parentNode);
            //console.log(this.parentNode.parentNode.parentNode);
        };

        tb4[0].appendChild(new_tr);
    };

    let btn2 = document.getElementById('btn2');
    let tab6 = document.getElementById('table6');

    btn2.onclick = function() {
        let name2 = document.getElementById('name2');
        let tb6 = tab6.getElementsByTagName('tbody')
        let rows = tb6[0].getElementsByTagName('tr');
        for (let i = 0; i < rows.length; i++) {
            let tab_text = rows[i].getElementsByTagName('td')[1].innerHTML;
            let name_value = name2.value.toLowerCase();
            let arr = name_value.split(' ');
            tab_text = tab_text.toLowerCase();

            rows[i].style.backgroundColor = "";
            for (let j = 0; j < arr.length; j++) {
                if (tab_text.search(arr[j]) != -1) {
                    rows[i].style.backgroundColor = "yellow";
                }
            }

            console.log(arr.length);

        }

    };
</script>

</html>