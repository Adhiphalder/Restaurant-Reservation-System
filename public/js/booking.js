function toggleExtraSeats() {
    var select = document.getElementById("guest_no");
    var extraSeatDiv = document.querySelector(".extra_seat");

    if (select.value == "none" || select.value == "eight" || select.value == "seven" || select.value == "six"|| select.value == "five"|| select.value == "four"|| select.value == "three"||select.value == "two"||select.value == "one") {
        extraSeatDiv.style.display = "none";
    } else {
        extraSeatDiv.style.display = "block";
    }
}



document.getElementById("extraCheckbox").addEventListener("change", function() {
    var selectedValue = document.getElementById("guest_no").value;
    if (this.checked && (selectedValue === "nine" || selectedValue === "ten" || selectedValue === "eleven" || selectedValue === "twelve" || selectedValue === "thirdteen" || selectedValue === "fourteen" || selectedValue === "fiftheen" || selectedValue === "sixteen")) {
        document.querySelector(".extra_gnum").style.display = "block";
    } else {
        document.querySelector(".extra_gnum").style.display = "none";
    }
});