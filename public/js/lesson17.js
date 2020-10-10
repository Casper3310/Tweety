//均速移動
function chaneg(obj, attr, traget) {

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
}
//大小圖連動
function tab() {
    big_pic_li[now].style.zIndex = nowindex++;
    for (let j = 0; j < small_pic_li.length; j++) {
        chaneg(small_pic_li[j], 'opacity', 60);
    }
    chaneg(small_pic_li[now], 'opacity', 100);
    big_pic_li[now].style.height = 0;
    chaneg(big_pic_li[now], 'height', 320);

    if (now == 0) {
        chaneg(small_pic_ul, 'left', 0);
    }
    else if (now == small_pic_li.length - 1) {
        chaneg(small_pic_ul, 'left', -(now - 2) * small_pic_li[0].offsetWidth)
    }
    else { chaneg(small_pic_ul, 'left', -(now - 1) * small_pic_li[0].offsetWidth) }

    //在無其他border、migrain影響下可直接使用offset系列
    //chaneg(small_pic_ul,'left',-(now-1)*parseInt(getComputedStyle(small_pic_li[0]).width))
}

let oDiv = document.getElementById('playimages');
let btn_prev = document.getElementsByClassName('prev')[0];
let btn_next = document.getElementsByClassName('next')[0];
let btn_mark_left = document.getElementsByClassName('mark_left')[0];
let btn_mark_right = document.getElementsByClassName('mark_right')[0];

let big_pic_ul = document.getElementsByClassName('big_pic')[0];
let big_pic_li = big_pic_ul.getElementsByTagName('li');
let small_pic = document.getElementsByClassName('small_pic')[0];
let small_pic_ul = small_pic.getElementsByTagName('ul')[0];
let small_pic_li = small_pic.getElementsByTagName('li');

let nowindex = 2;
let now = 0;
small_pic_ul.style.width = small_pic_li.length * small_pic_li[0].offsetWidth + "px";

//大圖左右按鈕
btn_prev.onmouseover = btn_mark_left.onmouseover = function () {
    chaneg(btn_prev, 'opacity', 100)
}
btn_mark_left.onmouseout = function () {
    chaneg(btn_prev, 'opacity', 0)
}
btn_next.onmouseover = btn_mark_right.onmouseover = function () {
    chaneg(btn_next, 'opacity', 100)
}
btn_mark_right.onmouseout = function () {
    chaneg(btn_next, 'opacity', 0)
}
//小圖淡入淡出，，小圖點擊
for (let i = 0; i < small_pic_li.length; i++) {
    small_pic_li[i].index = i;
    small_pic_li[i].onclick = function () {
        if (this.index == now) { return; }
        now = this.index;
        tab()
    }
    small_pic_li[i].onmouseover = function () {
        chaneg(this, 'opacity', 100);
    }
    small_pic_li[i].onmouseout = function () {
        if (this.index != now) {
            chaneg(this, 'opacity', 60);
        }
    }
}

btn_prev.onclick = function () {
    now--
    if (now == -1) {
        now = small_pic_li.length - 1;
    }
    tab();
};
btn_next.onclick = function () {
    now++
    if (now == small_pic_li.length) {
        now = 0;
    }
    tab();
};
let timer = setInterval(btn_next.onclick, 2000);
oDiv.onmouseover = function () { clearInterval(timer) };
oDiv.onmouseout = function () { timer = setInterval(btn_next.onclick, 2000) };