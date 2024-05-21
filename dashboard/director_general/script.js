// const button = document.querySelector(".button");
const toast = document.querySelector(".toasts");
const closeIcon = document.querySelector(".close");
const progress = document.querySelector(".progress");

let timer1, timer2;

window.onload = function() {
  toast.classList.add("active");
  progress.classList.add("active");
  console.log("yes i am in");
  
  timer1 = setTimeout(() => {
    toast.classList.remove("active");
  }, 5000); //1s = 1000 milliseconds

  timer2 = setTimeout(() => {
    progress.classList.remove("active");
  }, 5300);
};

closeIcon.addEventListener("click", () => {
  toast.classList.remove("active");
  
  setTimeout(() => {
    progress.classList.remove("active");
  }, 300);

  clearTimeout(timer1);
  clearTimeout(timer2);
});