let json = {
    a: 15641,
    b: 'sdwq',
    c: 'www',
    d: function () {
        alert('ddd');
    },
    e: function () {
        console.log(this.a);
    }
};
//console.log(json.a)
//json.d()
//B繼承A的屬性和方法
function A() {
    this.a = 12;
}
A.prototype.show = function () {
    //console.log(this.a);
}
//使用call()改變this
function B() {
    A.call(this);
}
//B引用A，A和B視同一塊記憶體空間
//B.prototype = A.prototype;
//避免B去影響A需要重新循環一個A放到B裡面
for (let i in A.prototype) {
    B.prototype[i] = A.prototype[i];
}
B.prototype.fn = function () {
    //console.log('aaa');
}

let objB = new B;
let objA = new A;
//console.log(objB.a)
objB.show()
objB.fn();
//objA.fn();


//DIV拖移
function drag(id) {
    let drag_this = this;
    this.mousTop = 0;
    this.mousLeft = 0;
    this.div = document.getElementById(id);
    this.div.onmousedown = function (ev) {
        drag_this.fnmousdown(ev);
    };
    this.div.onmouseup = function () {
        drag_this.mousup();
    }
}

drag.prototype.fnmousdown = function (ev) {
    let _this = this;
    this.mousTop = ev.clientY - this.div.offsetTop;
    this.mousLeft = ev.clientX - this.div.offsetLeft;
    document.onmousemove = function (ev) {
        _this.fnmove(ev);
        return false;
    }
}

drag.prototype.fnmove = function (ev) {
    this.div.style.top = ev.clientY - this.mousTop + "px";
    this.div.style.left = ev.clientX - this.mousLeft + "px";
}

drag.prototype.mousup = function () {
    document.onmousemove = '';
}
new drag('div1');

function limit(id) {
    drag.call(this, id);//繼承屬性
}
//繼承原型
for (let i in drag.prototype) {
    limit.prototype[i] = drag.prototype[i];
}
limit.prototype.fnmove = function (ev) {
    let l = (ev.clientY - this.mousTop);
    let t = (ev.clientX - this.mousLeft);
    console.log(t);
    if(t<0)
    {
        t=0;
    }
    else if(t>document.documentElement.clientWidth-this.div.offsetWidth)
    {
        t = document.documentElement.clientWidth-this.div.offsetWidth;
    }
    if(l<0)
    {
        l=0;
    }
    else if(l>document.documentElement.clientHeight-this.div.offsetHeight)
    {
        l = document.documentElement.clientHeight-this.div.offsetHeight;
    }
    this.div.style.top = l + "px";
    this.div.style.left = t + "px";
}


new limit('div2');