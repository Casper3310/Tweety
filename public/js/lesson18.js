let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
let div3 = document.getElementById('div3');
let div4 = document.getElementById('div4');
let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');
let btn3 = document.getElementById('btn3');
let btn4 = document.getElementById('btn4');
let text1 = document.getElementById('text1');
let ul1 = document.getElementById('ul1');

div1.onmouseover = function () {
    chaneg(div1, 'width', 200, function () {
        chaneg(div1, 'height', 200, function () {
            chaneg(div1, 'opacity', 60)
        });
    });
};
div1.onmouseout = function () {
    chaneg(div1, 'opacity', 100, function () {
        chaneg(div1, 'height', 100, function () {
            chaneg(div1, 'width', 100);
        })
    })
}
btn1.onclick = function () {
    chaneg2(div2, { width: 200, height: 200, opacity: 30 });
}

btn3.onclick = function () {
    chaneg2(div4, { width: 101, height: 200, opacity: 30 });
}

btn2.onclick = function () {
    chaneg3(div3, { width: 101, height: 200, opacity: 30 });
}

btn4.onclick = function () {
    let new_li = document.createElement('li');
    new_li.innerHTML = text1.value;
    if (ul1.children.length > 0) { ul1.insertBefore(new_li, ul1.children[0]); }
    else { ul1.appendChild(new_li); }
    text1.value = '';
    let li_height = new_li.offsetHeight;
    new_li.style.height = 0;
    chaneg3(new_li,{height:li_height},function(){
        chaneg3(new_li,{opacity:100});
    });

    console.log(li_height)
}

function chaneg(obj, attr, traget, fnend) {

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {

        let current_style = 0;
        if (attr == 'opacity') {
            current_style = Math.round(parseFloat(getComputedStyle(obj, false)[attr]) * 100);
            //因為習慣上處理是整數所以*100
            //Math.round()避免小數近似值造成問題
        }
        else {
            current_style = parseInt(getComputedStyle(obj, false)[attr]);
        }

        let speed = (traget - current_style) / 10;
        speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
        if (current_style == traget) {
            clearInterval(obj.timer);
            if (fnend) { fnend() };
        }
        else {
            if (attr == 'opacity') {
                obj.style[attr] = (current_style + speed) / 100;
            }
            else {
                obj.style[attr] = (current_style + speed) + "px";
            }
        }
    }, 30)
};
//以JSON形式
function chaneg2(obj, json, fnend) {

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        for (let attr in json) {
            let current_style = 0;
            if (attr == 'opacity') {
                current_style = Math.round(parseFloat(getComputedStyle(obj, false)[attr]) * 100);
                //因為習慣上處理是整數所以*100
                //Math.round()避免小數近似值造成問題
            }
            else {
                current_style = parseInt(getComputedStyle(obj, false)[attr]);
            }

            let speed = (json[attr] - current_style) / 10;
            speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
            if (current_style == json[attr]) {
                clearInterval(obj.timer);
                if (fnend) { fnend() };
            }
            else {
                if (attr == 'opacity') {
                    obj.style[attr] = (current_style + speed) / 100;
                }
                else {
                    obj.style[attr] = (current_style + speed) + "px";
                }
            }
        }
    }, 30)
};
//須等所有屬性移動到位置後才關掉計時器
//這個例子中如果沒有不到的，關定時器會比較容易實現
//僅能完全支援到CSS2
function chaneg3(obj, json, fnend) {

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        let stop_timer = true;
        for (let attr in json) {
            let current_style = 0;
            if (attr == 'opacity') {
                current_style = Math.round(parseFloat(getComputedStyle(obj, false)[attr]) * 100);
                //因為習慣上處理是整數所以*100
                //Math.round()避免小數近似值造成問題
            }
            else {
                current_style = parseInt(getComputedStyle(obj, false)[attr]);
            }

            let speed = (json[attr] - current_style) / 10;
            speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
            if (attr == 'opacity') {
                obj.style[attr] = (current_style + speed) / 100;
            }
            else {
                obj.style[attr] = (current_style + speed) + "px";
            }

            if (current_style != json[attr]) {
                stop_timer = false;
            }
        }
        if (stop_timer) {
            clearInterval(obj.timer);
            if (fnend) { fnend() };
        }

    }, 30)
};