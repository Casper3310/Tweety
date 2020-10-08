let btn1 = document.getElementById('btn1');
let div1 = document.getElementById('div1');

function starmove()
{
    let speed =37;
    let timer1 = setInterval(function()
    {
        if(div1.offsetLeft >= 300)
        {
            clearInterval(timer1);
            div1.style.left = 300+"px";
        }
        else
        {
            div1.style.left = div1.offsetLeft +speed+"px";
        }
        
    },30)
}

btn1.onclick = starmove;