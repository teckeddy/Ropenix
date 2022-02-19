let burger=document.querySelector(".burger");
const nav=document.querySelector(".main-nav");
let menuBurger=document.querySelectorAll(".menu-line");

burger.addEventListener('click',()=>{
    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
})