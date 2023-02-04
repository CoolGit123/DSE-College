

// ? news carousel
const slider = document.querySelector(".slider");
const cards = document.querySelectorAll('.slider .card');
const nextBtn = document.querySelector(".right-handle");
const prevBtn = document.querySelector(".left-handle");
let itemsPerScreen = parseInt(getComputedStyle(slider).getPropertyValue("--items-per-screen"));
let width = 100 / itemsPerScreen;
let currentIndex = 0;

function handleNext(){
  currentIndex++;
  if (currentIndex > cards.length - itemsPerScreen){
    currentIndex = 0;
  }
  slider.style.transform = `translateX(${-width * currentIndex + "%"})`;
}

function handlePrev(){
  currentIndex--;
  if (currentIndex < 0){
    currentIndex = cards.length - itemsPerScreen;
  }
  slider.style.transform = `translateX(${-width * currentIndex + "% "})`;
}

nextBtn.addEventListener("click", handleNext);
prevBtn.addEventListener("click", handlePrev);



// ? active news
let ActiveNews = localStorage.getItem("data-news-active");
console.log(ActiveNews);

if(ActiveNews === null){
    ActiveNews = 1;
}

console.log(ActiveNews)

const divs = document.querySelectorAll(".banner");
const news = document.querySelectorAll(".news");
const newsButtons = document.querySelectorAll(".inner-cont .btn-primary");
for(let i = 0; i<newsButtons.length; i++){
    newsButtons[i].onclick = function(){
        ActiveNews = i + 1;
        console.log(ActiveNews);

        filterDiv();
    }
}

function filterDiv(e){
    
    divs.forEach(div =>{
        div.classList.add("active");

        const divType = parseInt(div.dataset.number);
    
        if(divType != ActiveNews){
            div.classList.remove("active");
        }
    })

    news.forEach(div =>{
        div.classList.add("active");

        const newsType = parseInt(div.dataset.number);

        if (newsType != ActiveNews){
            div.classList.remove("active");
        }
    })
}

filterDiv();