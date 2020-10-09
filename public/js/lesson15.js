let div1 = document.getElementById('div1');
let btn1 = document.getElementById('btn1');
let div3 = document.getElementById('div3');
let time1 = null;

function start_move(obj,traget) {
    setInterval(function () {
        let speed = (traget-obj.offsetLeft)/17;
        speed = speed>0?Math.ceil(speed):Math.floor(speed);
        obj.style.left = obj.offsetLeft + speed + "px";
    }, 30)
}
btn1.onclick = function () {
    start_move(div1,300);
    start_move(div3,100);

}
window.onscroll = function(){
    let div4 = document.getElementById('div4');
    let scroll_top = document.documentElement.scrollTop;
    let View_area_height = document.documentElement.clientHeight;
    //document.documentElement.clientHeight  為畫面上可視區的高度
    div4.style.top = (View_area_height - div4.offsetHeight)/2 + scroll_top + "px";
    
    console.log(div4.style.top);
}