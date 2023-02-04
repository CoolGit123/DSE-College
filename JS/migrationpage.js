
// ? steps

const stepCard = document.querySelectorAll(".step");

for(let i = 0; i < stepCard.length; i++){
    stepCard[i].onclick = function(){
        if(stepCard[i].classList.contains("active")){
            stepCard[i].classList.remove("active");
            
        }else{
            stepCard[i].classList.add("active");
        }
    }
}