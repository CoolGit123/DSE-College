const main = document.querySelector(".main");

const ball = document.createElement('div');
const b = {x:50, y:0, w:150, h:150, dx:0.5, dy:0.5, ani:{}, move:false}
const imgcont = document.createElement('div');
imgcont.classList.add("ball-img");

const p = document.createElement('p');
p.innerHTML = "Jamal";

ball.style.borderRadius = '50%';
ball.style.width = `${b.w}px`;
ball.style.height = `${b.h}px`;
ball.style.position = 'absolute';
ball.style.left = `${b.x}px`;
ball.style.top = `${b.y}px`;
ball.classList.add("ball");

ball.appendChild(p);
ball.appendChild(imgcont);
main.appendChild(ball);


function moveBall(){
  b.ani= requestAnimationFrame(mover);
  b.move = true;

  ball.addEventListener("mouseover", ()=>{
    cancelAnimationFrame(mover);
    b.move = false;
    ball.style.borderRadius = '10%';
  })

  ball.addEventListener("mouseout", ()=>{
    b.ani=requestAnimationFrame(mover);
    b.move = true;
    ball.style.borderRadius = '50%';
  })
}

moveBall();

function mover(){
  b.x += b.dx;
  b.y += b.dy;

  if(b.y>main.clientHeight-b.h || b.y < 0){
    b.dy *= -1;
  }


  if(b.x>main.clientWidth-b.w || b.x < 0){
    b.dx *= -1;
  }

  ball.style.left = `${b.x}px`;
  ball.style.top = `${b.y}px`;

  if(b.move){
    b.ani = requestAnimationFrame(mover);
  }
}

let a = main.clientHeight()