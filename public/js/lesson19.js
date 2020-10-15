document.onclick = function (event) {
    console.log("整個document都有點擊事件");
    console.log("滑鼠Z座標:" + event.clientX);
    console.log("滑鼠Y座標:" + event.clientY);
    div1.style.display = 'none';
}
function ss(num) { console.log(num) };

let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
let div3 = document.getElementsByClassName('div3');
let div4 = document.getElementById('div4');
let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');
let btn3 = document.getElementById('btn3');

btn1.onclick = function (event) {
    event.cancelBubble = true;
    div1.style.display = 'block';
};

btn2.onclick = function () {
    document.onmousemove = function (ev) {

        let pos = getPos(ev);
        div2.style.left = ev.clientX + 'px';
        div2.style.left = pos.x + 'px';
        div2.style.top = pos.y + 'px';
        /*let scroll_top = document.documentElement.scrollTop;
        div2.style.left = ev.clientX + 'px';
        div2.style.top = ev.clientY + scroll_top + 'px';*/
    }
}

//常用可以封裝成一個function
function getPos(ev) {
    let scroll_top = document.documentElement.scrollTop;
    let scroll_left = document.documentElement.scrollLeft;
    return { x: ev.clientX + scroll_left, y: ev.clientY + scroll_top };
}

btn3.onclick = function (ev) {
    document.onmousemove = function (ev) {
        let pos = getPos(ev);
        for (let i = div3.length - 1; i > 0; i--) {
            div3[i].style.left = div3[i - 1].offsetLeft + 'px';
            div3[i].style.top = div3[i - 1].offsetTop + 'px';
        }

        div3[0].style.left = pos.x + 'px';
        div3[0].style.top = pos.y + 'px';

    }
}

document.onkeydown = function(ev){
    let scroll_top = document.documentElement.scrollTop;
    if(ev.keyCode==39)
    {
        div4.style.left = div4.offsetLeft+10+"px";
    }
    else if(ev.keyCode==37)
    {
        div4.style.left = div4.offsetLeft-10+"px";
    }
    else if(ev.keyCode==38)
    {
        div4.style.top = div4.offsetTop-10+"px";
    }
    else if(ev.keyCode==40)
    {
        div4.style.top = div4.offsetTop+10+"px";
    }
    console.log(div4.offsetHeight);
}

