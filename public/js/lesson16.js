let div1_div = document.getElementById('div1').getElementsByTagName('div');
let timer1 = null;
for (i = 0; i < div1_div.length; i++) {
    div1_div[i].onmouseover = function () {
        starmove(this, 600)
    };
    div1_div[i].onmouseout = function () {
        starmove(this, 100)
    };
}
function starmove(obj, traget) {
    let speed = 0;
    clearInterval(timer1);
    timer1 = setInterval(function () {
        speed = (traget - obj.offsetWidth) / 5;
        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);

        if (traget == obj.offsetWidth) {
            clearInterval(timer1);
        }
        else if (Math.abs(traget - obj.offsetWidth) <= 5) {
            clearInterval(timer1);
            obj.style.width = traget + "px";

        }
        else {
            obj.style.width = obj.offsetWidth + speed + "px";
        }


    }, 30)
}

let div2_div = document.getElementById('div2').getElementsByTagName('div');
for (i = 0; i < div2_div.length; i++) {
    div2_div.timer = null;
    div2_div[i].onmouseover = function () {
        starmove(this, 600)
    };
    div2_div[i].onmouseout = function () {
        starmove(this, 100)
    };
}
function starmove(obj, traget) {
    let speed = 0;
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        speed = (traget - obj.offsetWidth) / 5;
        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);

        if (traget == obj.offsetWidth) {
            clearInterval(obj.timer);
        }
        else if (Math.abs(traget - obj.offsetWidth) <= 5) {
            clearInterval(obj.timer);
            obj.style.width = traget + "px";

        }
        else {
            obj.style.width = obj.offsetWidth + speed + "px";
        }


    }, 30)
}
