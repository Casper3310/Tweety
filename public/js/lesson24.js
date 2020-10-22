function tab_switch(id) {
    let div = document.getElementById(id);
    let tab_this = this;

    this.Adiv = div.getElementsByTagName('div');
    this.Abtn = div.getElementsByTagName('button');

    for (let i = 0; i < this.Abtn.length; i++) {
        this.Abtn[i].index = i;
        //直接使用this.btn_Click();會讓this變化成Abtn[i].onclick
        this.Abtn[i].onclick =function(){
            tab_this.btn_Click(this);
        } 
    }
}
tab_switch.prototype.btn_Click =  function (oBtn) {
    for (let j = 0; j < this.Adiv.length; j++) {
        this.Abtn[j].className = '';
        this.Adiv[j].style.display = 'none';
    }
    oBtn.className = 'active';
    this.Adiv[oBtn.index].style.display = 'block';
}

new tab_switch('div1');
new tab_switch('div2');