const $tableTitle = document.querySelectorAll('.container-text-explore')

Array.from($tableTitle).forEach(function(el){
   el.addEventListener('click',()=>{
        let $valueFocused = el.dataset.value
        const $image = document.querySelectorAll('.explore-right')
        // console.log($image)
        Array.from($image).forEach(function(image){
            if(image.dataset.value === $valueFocused){
                image.style.opacity = 1
            }
            else {
                image.style.opacity = 0
            }

        })
        })
})

// JS For accordeon 

const page = document.querySelector('.explore-container')
const acc = document.getElementsByClassName("titleToClick")
const textToPop = document.querySelectorAll(".textToPop")
const linkToPop = page.querySelectorAll("a")
let i

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    const myTitleFocused = this
    const panel = this.nextElementSibling;
    if(panel.classList.contains('active'))
    {
      panel.style.maxHeight = null;
      panel.classList.remove('active')
      myTitleFocused.classList.remove('active')
      panel.querySelector('a').classList.remove('active')
    }
    else {

          Array.from(textToPop).forEach(function(text){
            text.style.maxHeight = null;
            text.classList.remove('active')
            
          })
          Array.from(linkToPop).forEach(function(link){
            link.classList.remove('active')
          }) 
          Array.from(acc).forEach(function(title){
            title.classList.remove('active')
          })         
          panel.classList.add('active')
          panel.style.maxHeight = panel.scrollHeight + "px";
          panel.querySelector('a').classList.add('active')
          // el.classList.add('active')
          myTitleFocused.classList.add('active')
    }
  });
}
function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
}
setTimeout(function() { eventFire(document.querySelector('.titleToClick-1'), 'click'); }, 1000);