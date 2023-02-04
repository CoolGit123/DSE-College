
// ? FAQ button

var acc = document.getElementsByClassName("accordion");
var i;
var len = acc.length;
for (i = 0; i < len; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}






// ? News carousel
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




// ? card functionality
const backdrop = document.querySelector(".backdrop");
const innerCards = document.querySelectorAll(".inner-card");
const innerCardBtns = document.querySelectorAll(".inner-card .btn-primary");

for(let i = 0; i< cards.length; i++){
  cards[i].addEventListener("click", ()=> {
    backdrop.classList.add("active");
    innerCards[i].classList.add("active");
    document.body.style.overflowY = "hidden";


    innerCardBtns[i].addEventListener("click", function(e) {
      e.preventDefault();

      let dataNewsActive = parseInt(innerCards[i].dataset.news);
      console.log(dataNewsActive);

      localStorage.setItem('data-news-active', dataNewsActive);
      window.location.href = "../HTML/separateNewPage.php";
    })
  });

  backdrop.addEventListener("click", () => {
    backdrop.classList.remove("active");
    innerCards[i].classList.remove("active");
    document.body.style.overflowY = "scroll";
  })
}