let btn1 = document.getElementById('btn1');

btn1.onclick = function () {
    let rows = document.getElementById('table1').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    let arr = [];
    for (let i = 0; i < rows.length; i++) {

        arr[i] = rows[i];
        arr = arr.sort(function (n1, n2) {
            n1 = parseInt(n1.getElementsByTagName('td')[0].innerHTML);
            n2 = parseInt(n2.getElementsByTagName('td')[0].innerHTML);
            return n1 - n2;
        });
    }
    for (let i = 0; i < arr.length; i++) {
        let tbody = document.getElementById('table1').getElementsByTagName('tbody')[0];
        tbody.appendChild(arr[i]);
    }
};

let btn2 = document.getElementById('btn2');
let ul1 = document.getElementById('ul1');
let ul2 = document.getElementById('ul2');
btn2.onclick = function () {
    let ul1_li = ul1.getElementsByTagName('li');
    if (ul1_li.length > 0) {
        ul2.appendChild(ul1_li[0]);
    }
}

let btn3 = document.getElementById('btn3');
let ul3 = document.getElementById('ul3');
btn3.onclick = function()
{
    let ul3_li = ul3.getElementsByTagName('li');
    ul3.appendChild(ul3_li[0]);
};