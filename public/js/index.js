let learn_list = document.getElementById('learn_list');
let list_li = learn_list.getElementsByTagName('li');
learn_list.onclick = function()
{
    if(list_li[0].style.display == "block")
    {
        for(let i = 0; i<list_li.length; i++)
    {
        list_li[i].style.display = "none";
    }
    }
    else
    {
        for(let i = 0; i<list_li.length; i++)
    {
        list_li[i].style.display = "block";
    }
    }
}