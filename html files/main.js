var navbar=document.querySelector('#nav');
window.onscroll = ()=>{
    this.scrollY > 280? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

