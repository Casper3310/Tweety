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

let div3_div = document.getElementById('div3').getElementsByTagName('div');

for (let i = 0; i < div3_div.length; i++) {
    div3_div[i].alpha = 20;

    div3_div[i].timer = null;
    div3_div[i].onmouseover = function () {
        chaneg_opacity(this, 100);
    };
    div3_div[i].onmouseout = function () {
        chaneg_opacity(this, 20);
    };
}

function chaneg_opacity(obj, traget) {

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        let speed = (traget - obj.alpha) / 10;
        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
        if (obj.alpha == traget) {
            clearInterval(obj.timer);
        }
        else {
            obj.alpha += speed
            obj.style.opacity = (obj.alpha) / 100;
        }
    }, 30)
}

let div4_div = document.getElementById('div4').getElementsByTagName('div');

div4_div[0].onmouseover = function(){chaneg(this,'height',400,5)};
div4_div[0].onmouseout = function(){chaneg(this,'height',200,20)};
div4_div[1].onmouseover = function(){chaneg(this,'width',400,5)};
div4_div[1].onmouseout = function(){chaneg(this,'width',200,20)};
div4_div[2].onmouseover = function(){chaneg(this,'opacity',20,5)};
div4_div[2].onmouseout = function(){chaneg(this,'opacity',100,20)};

function chaneg(obj, attr ,traget,fast) {

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {

        let current_style = 0;
        if(attr=='opacity'){
            current_style = Math.round(parseFloat(getComputedStyle(obj,false)[attr])*100);
            //因為習慣上處理是整數所以*100
            //Math.round()避免小數近似值造成問題
        }
        else{
            current_style = parseInt(getComputedStyle(obj,false)[attr]);
        }

        let speed = (traget - current_style) / fast;
        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
        if (current_style == traget) {
            clearInterval(obj.timer);
        }
        else {
            if(attr =='opacity'){
                obj.style[attr] = (current_style + speed)/100;
            }
            else{
                obj.style[attr] = (current_style + speed) + "px";
            }
        }
    }, 30)
}
console.log(Math.round(3.5))