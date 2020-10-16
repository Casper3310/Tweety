let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
let div3 = document.getElementById('div3');
let div4 = document.getElementById('div4');
let div5 = document.getElementById('div5');
let div6 = document.getElementById('div6');
let div7 = document.getElementById('div7');
let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');
function myFunction() {
    document.getElementById("demo").innerHTML = Math.random();
}
function removeHandler() {
    document.removeEventListener("mousemove", myFunction);
}
div1.onmousedown = function (ev) {
    let box = document.createElement('div');
    box.className = 'box';
    box.style.height = div1.offsetHeight + "px";
    box.style.width = div1.offsetWidth + "px";
    document.body.appendChild(box);
    box.style.left = div1.offsetLeft + "px";
    box.style.top = div1.offsetTop + "px";

    //移動前滑鼠位置
    let disx = ev.clientX - div1.offsetLeft;
    let disy = ev.clientY - div1.offsetTop;
    document.onmousemove = function (ev) {
        //移動後滑鼠位置減掉移動前
        let l = ev.clientX - disx;
        let t = ev.clientY - disy;
        //需要移動多少
        box.style.left = l + "px";
        box.style.top = t + "px";
    }
    document.onmouseup = function () {
        document.onmousemove = null;
        div1.style.left = box.offsetLeft + "px";
        div1.style.top = box.offsetTop + "px";
        document.body.removeChild(box);
        document.onmouseup = null;
    }
    return false;

}

div3.onmousedown = function (ev) {
    let disx = ev.clientX - div3.offsetLeft;


    document.onmousemove = function (ev) {
        let l = ev.clientX - disx;
        if (l < 0) {
            l = 0;
        }
        else if (l > (div2.offsetWidth - div3.offsetWidth)) {
            l = div2.offsetWidth - div3.offsetWidth;
        }
        //DIV3在DIV2的位置百分比
        let scale = (div3.offsetLeft) / (div2.offsetWidth - div3.offsetWidth)
        div3.style.left = l + "px";
        div4.style.height = 400 * scale + "px";
        div4.style.width = 400 * scale + "px";
        return false;
    }
    document.onmouseup = function () {
        document.onmousemove = null;
    }
}

div7.onmousedown = function (ev) {
    let disx = ev.clientX - div7.offsetLeft;

    document.onmousemove = function (ev) {
        let l = ev.clientX - disx;
        if (l < 0) {
            l = 0;
        }
        else if (l > (div6.offsetWidth - div7.offsetWidth)) {
            l = div6.offsetWidth - div7.offsetWidth;
        }
        let scale = (div7.offsetLeft) / (div6.offsetWidth - div7.offsetWidth)
        div7.style.left = l + "px";
        div5.style.top = -scale * (div5.offsetHeight-div4.offsetHeight) + "px";


        return false;
    }
    document.onmouseup = function () {
        document.onmousemove = null;
    }
}



btn1.onclick = function () {
    console.log('aa');
}
btn1.addEventListener('click', function () {
    console.log('b');
}, false)
btn1.addEventListener('click', function () {
    document.addEventListener("mousemove", myFunction);
    console.log('c');
}, false)
btn2.onclick = function () { removeHandler() };

