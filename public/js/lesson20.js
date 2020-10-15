let div1 = document.getElementById('div1');
let text1 = document.getElementById('text1');
let div2 = document.getElementById('div2');
let disx = 0;
let disy = 0;
document.oncontextmenu = function (ev) {
    div1.style.display = 'block';
    div1.style.left = ev.clientX + "px";
    div1.style.top = ev.clientY + "px";
    return false;
}
document.onclick = function () {
    div1.style.display = "none";
}
text1.onkeydown = function (ev) {
    console.log(ev.keyCode);
    if (ev.keyCode >= 48 && ev.keyCode <= 57 || ev.keyCode == 8) {

    }
    else {
        return false;
    }

}

div2.onmousedown = function (ev) {
    disx = ev.clientX - div2.offsetLeft;
    disy = ev.clientY - div2.offsetTop;


    div2.onmousemove = function (ev) {
        let l = ev.clientX - disx;
        let t = ev.clientY - disy;
        if (l < 0) {
            l = 0;
        }
        else if (l > document.documentElement.clientWidth - div2.offsetWidth) {
            l = document.documentElement.clientWidth - div2.offsetWidth;
        }

        if (t < 0) {
            t = 0;
        }
        else if (t > document.documentElement.clientHeight - div2.offsetHeight) {
            t = document.documentElement.clientHeight - div2.offsetHeight;
        }
        div2.style.left = l + "px";
        div2.style.top = t + "px";
    }
    document.onmouseup = function () {
        div2.onmousemove = null;
    }
    return false;
}

//console.log(ev.clientY)