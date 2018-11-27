const $mobileMenu = document.querySelector('.nav-mobile')
// const $mask = document.querySelector('.mask');
const $buttonBurger = document.querySelector('button.hamburger')

$buttonBurger.addEventListener('click',()=>{
    $mobileMenu.classList.toggle('open')
    // $mask.classList.toggle('open');
    $buttonBurger.classList.toggle('is-active')
    
})