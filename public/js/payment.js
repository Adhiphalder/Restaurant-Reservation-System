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


  document.getElementById("p_method_card_exp").addEventListener("input", function() {
    let input = this.value;
    if (!/^\d{2}\/\d{2}$/.test(input)) {
      this.setCustomValidity("Please enter a valid MM/YY date format");
    } else {
      let [month, year] = input.split('/');
      if (parseInt(month) < 1 || parseInt(month) > 12) {
        this.setCustomValidity("Month must be between 01 and 12");
      } else {
        this.setCustomValidity("");
      }
    }
  });