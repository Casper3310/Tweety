let btn1 = document.getElementById('btn1');
let btn2 = document.getElementById('btn2');
let btn3 = document.getElementById('btn3');
let btn4 = document.getElementById('btn4');

let obj1 = new Object;
obj1.name = 'sss';
obj1.password = '33';
obj1.show = function () {
    console.log(this.name, this.password);
};
btn1.onclick = function () { obj1.show() };


//與上方相比當需要10比資料時只要是用10次create(name,password)
//不用重新再寫10次
function create(name, password) {
    let obj = new Object;
    obj.name = name;
    obj.password = password;
    obj.show = function () {
        console.log(this.name, this.password);
    };
    return obj;
}
btn2.onclick = function () {
    let aaa = create('xx', 111);
    let bbb = create('qqq', 578);
    aaa.show();
    bbb.show();
}


let ccc = create('xx', 111);
let ddd = create('qqq', 578);
btn3.onclick = function () {
    console.log("aaa.show和bbb.show方法是否相等" + (ccc.show == ddd.show));
}

//在方法前使用new時瀏覽器會自動建立新物件this，自動返回this
function create2(name, password) {
    
    this.name = name;
    this.password = password;
    this.show = function () {
        console.log(this.name, this.password);
    };
}

btn4.onclick = function()
{
    let A1 = new create2('A1',456);
    let B2 = new create2('B2',471);
    A1.show();
    B2.show();
}