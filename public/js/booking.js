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
        document.getElementById("table_no_two_select").style.display = "block";
    } else {
        document.querySelector(".extra_gnum").style.display = "none";
    }
});

document.getElementById('gnum').addEventListener('change', function() {
    var selectedOption = this.value;
    var formDivTable = document.querySelector('.form_div_table');
    
    if (selectedOption === 'twoseater' || selectedOption === 'fourseater' ||selectedOption === 'sixseater' ||selectedOption === 'eightseater') {
        formDivTable.style.display = 'block';
    } else {
        formDivTable.style.display = 'none';
    }
});


function dateValidation() {
    var dateInput = document.getElementById('date');
    
    var today = new Date();
    
    var formattedToday = today.toISOString().substr(0, 10);
    
    dateInput.setAttribute('min', formattedToday);
}

dateValidation()