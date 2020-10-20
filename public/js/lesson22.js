<<<<<<< HEAD
let btn1 = document.getElementById('btn1');
let div1 = document.getElementById('div1');

btn1.onclick = function(){
    //1.建立XML
    let ajax = new XMLHttpRequest();
    //2.連接到伺服器
    //open('需要GET或POST等HTTP傳送方式','開啟的文件名稱','是否異步傳輸')
    //阻止快取方式之一為加上時間
    ajax.open('GET','http://localhost/Tweety/public/a.txt?t='+new Date().getTime(),true);
    //3.發送請求
    ajax.send();
    //4.接受回應
    //當回應時是以事件形式出現
    ajax.onreadystatechange = function(){
        //讀取傳輸過程到哪一部
        //4為讀取完成可以使用
        if(ajax.readyState ==4)
        {
            //判斷HTTP狀態碼
            if(ajax.status ==200)
            {
                console.log('成功'+ajax.responseText);
                div1.innerHTML = ajax.responseText;
            }
            else
            {
                console.log('失敗');
            }
        }
    };
    
}
=======
let div1 = document.getElementById('div1');
let div2 = document.getElementById('div2');
div1.innerHTML = new Date().getTime();
div2.innerHTML = new Date();
>>>>>>> c063185cd1f5a508f09e94f4663d4e04187d5124
