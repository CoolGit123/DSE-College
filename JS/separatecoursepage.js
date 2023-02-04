const btns = document.querySelectorAll(".features-left button");
const divs = document.querySelectorAll(".features-right div");

function setActiveBtn(e) {
    btns.forEach(btn =>{
        btn.classList.remove('active');
    });
    e.target.classList.add("active");
}

function filterDiv(e){
    setActiveBtn(e);

    divs.forEach(div =>{
        div.classList.add("active");

        const divType = parseInt(div.dataset.feature);
        const btnType = parseInt(e.target.dataset.button);

        if(divType !== btnType){
            div.classList.remove("active");
        }
    });
}

for(let i = 0; i<btns.length; i++){
    btns[i].addEventListener("click", filterDiv);
}




// ? inner html
