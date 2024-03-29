let click0 = document.querySelector("#pcedtocout")
let click1 = document.querySelector("#p_method_upi");
let click2 = document.querySelector("#p_method_card")


let content0 = document.querySelector(".left_first_bottom")
let content1 = document.querySelector(".p_method_upi_main")
let content2 = document.querySelector(".p_method_card_main")

 

click0.addEventListener("click" , ()=>{
    content0.style.display = "block"
})


click1.addEventListener("click" , ()=>{
    content1.style.display = "block"
    content2.style.display = "none"
})



click2.addEventListener("click" , ()=>{
    content2.style.display = "block"
    content1.style.display = "none"
})
