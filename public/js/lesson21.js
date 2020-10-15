let div1 = document.getElementById('div1');
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
    disx = ev.clientX - div1.offsetLeft;
    disy = ev.clientY - div1.offsetTop;
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
    }
    return false;

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

