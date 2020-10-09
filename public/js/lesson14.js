let btn1 = document.getElementById('btn1');
let div1 = document.getElementById('div1');
let timer1 = null;

function starmove() {
    let speed = 7;
    clearInterval(timer1);
    timer1 = setInterval(function () {
        if (div1.offsetLeft >= 300) {
            clearInterval(timer1);
            div1.style.left = 300 + "px";
        }
        else {
            div1.style.left = div1.offsetLeft + speed + "px";
        }

    }, 30)
}

btn1.onclick = starmove;

let div2 = document.getElementById('div2');
let div2_p = div2.getElementsByTagName('p')[0];
let timer2 = null;
let timer3 = null;

function starmove2() {
    let speed = 17;
    clearInterval(timer2);
    timer2 = setInterval(function () {
        if (div2.offsetLeft >= 0) {
            clearInterval(timer2);
            div2.style.left = 0;
        }
        else {
            div2.style.left = div2.offsetLeft + speed + "px";
        }
    }, 30)
}

function starmove3() {
    let speed = 17;
    clearInterval(timer2);
    timer2 = setInterval(function () {
        if (div2.offsetLeft <= -150) {
            clearInterval(timer2);
            div2.style.left = -150;
        }
        else {
            div2.style.left = div2.offsetLeft - speed + "px";
        }
    }, 30)
}
div2.onmouseover = starmove2;
div2.onmouseout = starmove3;

let btn2 = document.getElementById('btn2');
let btn3 = document.getElementById('btn3');

function merge_starmove(speed, traget) {
    clearInterval(timer2);
    timer2 = setInterval(function () {
        if (traget >= 0) {
            if (div2.offsetLeft >= traget) {
                clearInterval(timer2);
                div2.style.left = traget;
            }
            else {
                div2.style.left = div2.offsetLeft + speed + "px";
            }
        }
        else if(traget <= -150){
            if (div2.offsetLeft <= traget) {
                clearInterval(timer2);
                div2.style.left = traget;
            }
            else {
                div2.style.left = div2.offsetLeft + speed + "px";
            }
        }


    }, 30)
}
btn2.onclick = function () {
    merge_starmove(13, 0);
}

btn3.onclick = function () {
    merge_starmove(-17, -150);

}