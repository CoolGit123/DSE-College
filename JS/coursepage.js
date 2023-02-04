
// ? courses page

// ? discover section
const btns = document.querySelectorAll('.buttons button');
const imgs = document.querySelectorAll('.cards-container div');

function setActiveBtn(e){
    btns.forEach(btn =>{
        btn.classList.remove('btn-clicked');
    });
    e.target.classList.add('btn-clicked');
}

function filterImg(e){
    setActiveBtn(e);

    imgs.forEach(div =>{
        div.classList.remove('img-shrink');
        div.classList.add('img-expanded');

        const imgType = parseInt(div.dataset.img);
        const btnType = parseInt(e.target.dataset.btn);

        if(imgType !== btnType){
            div.classList.remove('img-expanded');
            div.classList.add('img-shrink');
        }
    });
}

for(let i = 0; i < btns.length; i++){
    btns[i].addEventListener("click", filterImg);
}


btns[0].addEventListener('click', (e) => {

    setActiveBtn(e);

    imgs.forEach(img => {
        img.classList.remove('img-shrink');
        img.classList.add('img-expanded');
    });
});