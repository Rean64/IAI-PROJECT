// scrollbars
window.addEventListener("scroll", function() {
    // console.log(window.scrollY)
    let navbar = document.querySelector('.nav2')
    if(window.scrollY > 480) {
        navbar.classList.add('active')
    }else{
        navbar.classList.remove('active')
    }
})

// model
const boxEl = document.querySelector('.box')
const modeEl = document.querySelector('.model-container')
const heroEl = document.querySelector('.hero')
const closeEl = document.querySelector('.close')
const btnEl = document.querySelector('.btn')

btnEl.addEventListener('click', ()=>{
    heroEl.classList.add('active')
    boxEl.classList.remove('active')
    modeEl.classList.add('active')
})

closeEl.addEventListener('click', ()=>{
    heroEl.classList.remove('active')
    boxEl.classList.add('active')
    modeEl.classList.remove('active')
})

