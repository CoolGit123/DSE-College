let burger = document.querySelector(".burger");
let navItems = document.querySelector(".nav-links");

burger.onclick = function(){
    burger.classList.toggle("active");
    navItems.classList.toggle("active");
};

