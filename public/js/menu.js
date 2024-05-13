/**
 * PRELOAD
 * 
 * loading will be end after document is loaded
 */

const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});



/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}





let click1 = document.querySelector("#main_top1")
let click2 = document.querySelector("#main_top2")
let click3 = document.querySelector("#main_top3") 
 

let content1 = document.querySelector(".starter_main")
let content2 = document.querySelector(".main_course_main")
let content3 = document.querySelector(".desert_main")



click2.addEventListener("click" , ()=>{
    content2.style.display = "block"
    click2.style.color = "#e4c590"
    click2.style.borderBottom = "5px solid #e4c590"
    content1.style.display = "none"
    content3.style.display = "none"
    click1.style.color = "white"
    click3.style.color = "white"
    click1.style.borderBottom = "none"
    click3.style.borderBottom = "none"
})
 

click3.addEventListener("click" , ()=>{
    content3.style.display = "block"
    click3.style.color = "#e4c590"
    click3.style.borderBottom = "5px solid #e4c590"
    content1.style.display = "none"
    content2.style.display = "none"
    click2.style.color = "white"
    click1.style.color = "white"
    click2.style.borderBottom = "none"
    click1.style.borderBottom = "none"
})

click1.addEventListener("click" , ()=>{
    content1.style.display = "block"
    click1.style.color = "#e4c590"
    click1.style.borderBottom = "5px solid #e4c590"
    content2.style.display = "none"
    content3.style.display = "none"
    click2.style.color = "white"
    click3.style.color = "white"
    click2.style.borderBottom = "none"
    click3.style.borderBottom = "none"
})




ScrollReveal().reveal(".submenu_mutton" , {delay : 200})
ScrollReveal().reveal(".submenu_chicken", {delay : 200})
ScrollReveal().reveal(".submenu_veg" , {delay : 200})
 