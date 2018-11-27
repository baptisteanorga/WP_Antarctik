const $circles = document.querySelectorAll('.circle')
const $button_1 = Array.from(document.querySelectorAll('.w3-display-1'))
const $button_2 = Array.from(document.querySelectorAll('.w3-display-2'))
const $button_3 = Array.from(document.querySelectorAll('.w3-display-3'))


$circles.forEach(element => {
    document.addEventListener('scroll',()=>{
        element.classList.add('is-active')
    })
});

let slideIndex = 1;
showDivs(slideIndex)

function plusDivs(n) {
    // showDivs(slideIndex += n)
    showDivs(n-1)
}

function showDivs(n) {
    let i = 0 
    const x = Array.from(document.getElementsByClassName("slider"))
    const my_table = x[n] 
    if(x[0] != undefined)
    
    {
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"
            x[i].classList.remove('is-active')
          }
          x[n].style.display = "flex"
          x[n].classList.add('is-active')
          if(n===0){            
              $button_1.forEach(function(element) {
                  element.classList.add('is-active')
              })
              $button_2.forEach(function(element) {
                  element.classList.remove('is-active')
              })
              $button_3.forEach(function(element) {
                element.classList.remove('is-active')
              })                           
                            
          }
          else if (n === 1){
            $button_1.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_2.forEach(function(element) {
                element.classList.add('is-active')
            })
            $button_3.forEach(function(element) {
              element.classList.remove('is-active')
            })             
          }
          else if (n === 2){
            $button_1.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_2.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_3.forEach(function(element) {
              element.classList.add('is-active')
            })                                   
            
          }
    //     if (n > x.length) {slideIndex = 1} 
    //     if (n < 1) {slideIndex = x.length} 
    //     for (i = 0; i < x.length; i++) {
    //         x[i].style.display = "none"
    //         x[i].classList.remove('is-active')
    //     }
    //     x[slideIndex-1].style.display = "flex"
    //     x[slideIndex-1].classList.add('is-active')
    }
}

carousel()
function carousel() {
    let i
    const x = document.getElementsByClassName("slider")
    if(x[0] != undefined)
    {
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none" 
          x[i].classList.remove('is-active')
        }
        slideIndex++
        if (slideIndex > x.length) {slideIndex = 1} 
        x[slideIndex-1].style.display = "flex"
        x[slideIndex-1].classList.add('is-active')
        if(slideIndex === 1){
            $button_1.forEach(function(element) {
                element.classList.add('is-active')
            })
            $button_2.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_3.forEach(function(element) {
              element.classList.remove('is-active')
            })            
                          
        }
        else if (slideIndex === 2){
            $button_1.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_2.forEach(function(element) {
                element.classList.add('is-active')
            })
            $button_3.forEach(function(element) {
              element.classList.remove('is-active')
            })               
        }
        else if (slideIndex === 3){
            $button_1.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_2.forEach(function(element) {
                element.classList.remove('is-active')
            })
            $button_3.forEach(function(element) {
              element.classList.add('is-active')
            })                                   
          
        }
    }
    setTimeout(carousel, 10000) // Change image every 2 seconds
}